<?php

use App\Models\Notification;
use App\Models\Product;
use App\Models\ProductSeller;
use App\Models\SMS;
use Illuminate\Http\Response;

function upload_file($request, $name, $dir, $pix = '')
{
    if ($request->hasFile($name)) {
        $file_name = $pix . time() . '.' . $request->file($name)->getClientOriginalExtension();
        if ($request->file($name)->move('files/uploads/' . $dir, $file_name))
            return $file_name;
        else
            return null;
    } else {
        return null;
    }
}

function setProductPrice($product_id)
{
    $productPrice = ProductSeller::with('product')->where(['product_id' => $product_id])->orderBy('price', 'ASC')->first();
    if ($productPrice) {
        Product::where('id', $product_id)->update(['price' => $productPrice->price, 'discount_price' => $productPrice->discount_price]);
        $notifications = Notification::with('user')->where('product_id', $product_id)->get();
        $mobiles = [];
        if ($productPrice->status == 1) {
            foreach ($notifications as $notification) {
                if ($notification->sms == 1) {
                    if ($notification->user->mobile != null) {
                        array_push($mobiles, $notification->user->mobile);
                    }
                }
                if ($notification->system == 1) {
                    Notification::where('product_id', $product_id)->update(['type' => '1']);
                }
            }
            if (sizeof($mobiles) > 0) {
                $link = "/at-{$product_id}/{$product_id}";
                $res = (new \App\Services\Notification\Notification)->sendSms($mobiles, "کاربر گرامی محصول مورد نظر شما موجود شد : {" . url($link) . "}.آتی یار");
                SMS::create([
                    'code' => "$product_id",
                    'type' => "موجود شدن محصول " . $productPrice->product->title,
                    'user_id' => auth()->user()->id,
                ]);
            }
        }
    } else {
        Product::where('id', $product_id)->update(['price' => 0, 'discount_price' => 0]);
        Notification::where('product_id', $product_id)->update(['type' => '0']);
    }
}

function setCookieCustom($name, $value, $expire)
{
    $value = serialize($value);
    $response = new Response('Hello World');
    $response->withCookie(cookie($name, $value, $expire));
    return $response;
}
function getCookieCustom($request, $name)
{
    $value = $request->cookie($name);
    $value = unserialize($value);
    return $value;
}


function getState($state_id = null)
{
    $select_state = null;
    $states = [
        ['id' => 1, 'code_tel' => '041', 'name' => 'آذربايجان شرقي',],
        ['id' => 2, 'code_tel' => '044', 'name' => 'آذربايجان غربي',],
        ['id' => 3, 'code_tel' => '045', 'name' => ' اردبيل',],
        ['id' => 4, 'code_tel' => '031', 'name' => 'اصفهان',],
        ['id' => 5, 'code_tel' => '026', 'name' => 'الـبرز',],
        ['id' => 6, 'code_tel' => '084', 'name' => 'ايلام',],
        ['id' => 7, 'code_tel' => '077', 'name' => 'بوشهر',],
        ['id' => 8, 'code_tel' => '021', 'name' => 'تهران',],
        ['id' => 9, 'code_tel' => '038', 'name' => 'چهارمحال و بختياري',],
        ['id' => 10, 'code_tel' => '056', 'name' => 'خراسان جنوبي',],
        ['id' => 11, 'code_tel' => '051', 'name' => 'خراسان رضوي',],
        ['id' => 12, 'code_tel' => '058', 'name' => 'خراسان شمالي',],
        ['id' => 13, 'code_tel' => '061', 'name' => 'خوزستان',],
        ['id' => 14, 'code_tel' => '024', 'name' => 'زنجان',],
        ['id' => 15, 'code_tel' => '023', 'name' => 'سمنان',],
        ['id' => 16, 'code_tel' => '054', 'name' => 'سيستان و بلوچستان',],
        ['id' => 17, 'code_tel' => '071', 'name' => 'فارس',],
        ['id' => 18, 'code_tel' => '028', 'name' => 'قزوين',],
        ['id' => 19, 'code_tel' => '025', 'name' => 'قم',],
        ['id' => 20, 'code_tel' => '087', 'name' => 'كردستان',],
        ['id' => 21, 'code_tel' => '034', 'name' => 'کرمان',],
        ['id' => 22, 'code_tel' => '083', 'name' => 'کرمانشاه',],
        ['id' => 23, 'code_tel' => '074', 'name' => 'كهگيلويه و بويراحمد',],
        ['id' => 24, 'code_tel' => '017', 'name' => 'گلستان',],
        ['id' => 25, 'code_tel' => '013', 'name' => 'گيلان',],
        ['id' => 26, 'code_tel' => '066', 'name' => 'لرستان',],
        ['id' => 27, 'code_tel' => '011', 'name' => 'مازندران',],
        ['id' => 28, 'code_tel' => '086', 'name' => 'مركزي',],
        ['id' => 29, 'code_tel' => '076', 'name' => 'هرمزگان',],
        ['id' => 30, 'code_tel' => '081', 'name' => 'همدان',],
        ['id' => 31, 'code_tel' => '035', 'name' => 'يزد',],
    ];
    if (!is_null($state_id)) {
        foreach ($states as $value) {
            if ($state_id == $value['id']) {
                return $value;
            }
        }
    }
    return $states;
}
function getCity($city_id)
{
    $cities = [

        ['id' => 1, 'state_id' => 1, 'name' => ' آذرشهر',],
        ['id' => 2, 'state_id' => 1, 'name' => ' اسكو',],
        ['id' => 3, 'state_id' => 1, 'name' => ' اهر',],
        ['id' => 4, 'state_id' => 1, 'name' => ' هوراند',],
        ['id' => 5, 'state_id' => 1, 'name' => ' بستان آباد',],
        ['id' => 6, 'state_id' => 1, 'name' => ' بناب',],
        ['id' => 7, 'state_id' => 1, 'name' => ' تبريز',],
        ['id' => 8, 'state_id' => 1, 'name' => ' جلفا',],
        ['id' => 9, 'state_id' => 1, 'name' => ' چاراويماق',],
        ['id' => 10, 'state_id' => 1, 'name' => ' خداآفرين',],
        ['id' => 11, 'state_id' => 1, 'name' => ' سراب',],
        ['id' => 12, 'state_id' => 1, 'name' => ' شبستر',],
        ['id' => 13, 'state_id' => 1, 'name' => ' عجبشير',],
        ['id' => 14, 'state_id' => 1, 'name' => ' شبستر',],
        ['id' => 15, 'state_id' => 1, 'name' => ' كليبر',],
        ['id' => 16, 'state_id' => 1, 'name' => ' مراغه',],
        ['id' => 17, 'state_id' => 1, 'name' => ' مرند',],
        ['id' => 18, 'state_id' => 1, 'name' => ' ملكان',],
        ['id' => 19, 'state_id' => 1, 'name' => ' ميانه',],
        ['id' => 20, 'state_id' => 1, 'name' => ' ورزقان',],
        ['id' => 21, 'state_id' => 1, 'name' => ' هريس',],
        ['id' => 22, 'state_id' => 1, 'name' => ' هشترود',],



        ['id' => 23, 'state_id' => 2, 'name' => ' اروميه',],
        ['id' => 24, 'state_id' => 2, 'name' => ' اشنويه',],
        ['id' => 25, 'state_id' => 2, 'name' => ' بوكان',],
        ['id' => 26, 'state_id' => 2, 'name' => ' پلدشت',],
        ['id' => 27, 'state_id' => 2, 'name' => ' پيرانشهر',],
        ['id' => 28, 'state_id' => 2, 'name' => ' تكاب',],
        ['id' => 29, 'state_id' => 2, 'name' => ' چالدران',],
        ['id' => 30, 'state_id' => 2, 'name' => ' چايپاره',],
        ['id' => 31, 'state_id' => 2, 'name' => ' خوي',],
        ['id' => 32, 'state_id' => 2, 'name' => ' سردشت',],
        ['id' => 33, 'state_id' => 2, 'name' => ' سلماس',],
        ['id' => 34, 'state_id' => 2, 'name' => ' شاهين دژ',],
        ['id' => 35, 'state_id' => 2, 'name' => ' شوط',],
        ['id' => 36, 'state_id' => 2, 'name' => ' ماكو',],
        ['id' => 37, 'state_id' => 2, 'name' => ' مهاباد',],
        ['id' => 38, 'state_id' => 2, 'name' => ' مياندوآب',],
        ['id' => 39, 'state_id' => 2, 'name' => ' نقده',],


        ['id' => 40, 'state_id' => 3, 'name' => ' اردبيل',],
        ['id' => 41, 'state_id' => 3, 'name' => ' بيله سوار',],
        ['id' => 42, 'state_id' => 3, 'name' => ' پارس آباد',],
        ['id' => 43, 'state_id' => 3, 'name' => ' خلخال',],
        ['id' => 44, 'state_id' => 3, 'name' => ' سرعين',],
        ['id' => 45, 'state_id' => 3, 'name' => ' كوثر',],
        ['id' => 46, 'state_id' => 3, 'name' => ' گرمي',],
        ['id' => 47, 'state_id' => 3, 'name' => ' مشگين شهر',],
        ['id' => 48, 'state_id' => 3, 'name' => ' نمين',],
        ['id' => 49, 'state_id' => 3, 'name' => ' نير',],


        ['id' => 50, 'state_id' => 4, 'name' => ' آران و بيدگل',],
        ['id' => 51, 'state_id' => 4, 'name' => ' اردستان',],
        ['id' => 52, 'state_id' => 4, 'name' => ' اصفهان',],
        ['id' => 53, 'state_id' => 4, 'name' => ' برخوار',],
        ['id' => 54, 'state_id' => 4, 'name' => ' بويين',],
        ['id' => 55, 'state_id' => 4, 'name' => ' مياندشت',],
        ['id' => 56, 'state_id' => 4, 'name' => ' خورو بيابانك',],
        ['id' => 57, 'state_id' => 4, 'name' => ' اروميه',],
        ['id' => 58, 'state_id' => 4, 'name' => ' لنجان',],
        ['id' => 59, 'state_id' => 4, 'name' => ' دهاقان',],
        ['id' => 60, 'state_id' => 4, 'name' => ' مباركه',],
        ['id' => 61, 'state_id' => 4, 'name' => ' سميرم',],
        ['id' => 62, 'state_id' => 4, 'name' => ' شاهين شهر وميمه',],
        ['id' => 63, 'state_id' => 4, 'name' => ' نائين',],
        ['id' => 64, 'state_id' => 4, 'name' => ' نجف آباد',],
        ['id' => 65, 'state_id' => 4, 'name' => ' نطنز',],
        ['id' => 66, 'state_id' => 4, 'name' => ' شهرضا',],
        ['id' => 67, 'state_id' => 4, 'name' => ' فريدن',],
        ['id' => 68, 'state_id' => 4, 'name' => ' تيران و كرون',],
        ['id' => 69, 'state_id' => 4, 'name' => ' فريدون شهر',],
        ['id' => 70, 'state_id' => 4, 'name' => ' چادگان',],
        ['id' => 71, 'state_id' => 4, 'name' => ' فالورجان',],
        ['id' => 72, 'state_id' => 4, 'name' => ' خميني شهر',],
        ['id' => 73, 'state_id' => 4, 'name' => ' كاشان',],
        ['id' => 74, 'state_id' => 4, 'name' => ' خوانسار',],
        ['id' => 75, 'state_id' => 4, 'name' => ' گلپايگان',],


        ['id' => 76, 'state_id' => 5, 'name' => ' اشتهارد',],
        ['id' => 77, 'state_id' => 5, 'name' => ' ساوجبالغ',],
        ['id' => 78, 'state_id' => 5, 'name' => ' طالقان',],
        ['id' => 79, 'state_id' => 5, 'name' => ' فرديس',],
        ['id' => 80, 'state_id' => 5, 'name' => ' كرج',],
        ['id' => 81, 'state_id' => 5, 'name' => ' نظرآباد',],


        ['id' => 82, 'state_id' => 6, 'name' => ' آبدانان',],
        ['id' => 83, 'state_id' => 6, 'name' => ' ايالم',],
        ['id' => 84, 'state_id' => 6, 'name' => ' ايوان',],
        ['id' => 85, 'state_id' => 6, 'name' => ' بدره',],
        ['id' => 86, 'state_id' => 6, 'name' => ' چرداول',],
        ['id' => 87, 'state_id' => 6, 'name' => ' درهشهر',],
        ['id' => 88, 'state_id' => 6, 'name' => ' دهلران',],
        ['id' => 89, 'state_id' => 6, 'name' => ' سيروان',],
        ['id' => 90, 'state_id' => 6, 'name' => ' ملكشاهي',],
        ['id' => 91, 'state_id' => 6, 'name' => ' مهران',],
        ['id' => 92, 'state_id' => 6, 'name' => ' مهران',],


        ['id' => 93, 'state_id' => 7, 'name' => ' بوشهر',],
        ['id' => 94, 'state_id' => 7, 'name' => ' تنگستان',],
        ['id' => 95, 'state_id' => 7, 'name' => ' جم',],
        ['id' => 96, 'state_id' => 7, 'name' => ' دشتستان',],
        ['id' => 97, 'state_id' => 7, 'name' => ' دشتي',],
        ['id' => 98, 'state_id' => 7, 'name' => ' دير',],
        ['id' => 99, 'state_id' => 7, 'name' => ' ديلم',],
        ['id' => 100, 'state_id' => 7, 'name' => ' عسلويه',],
        ['id' => 101, 'state_id' => 7, 'name' => ' كنگان',],
        ['id' => 102, 'state_id' => 7, 'name' => ' گناوه',],


        ['id' => 103, 'state_id' => 8, 'name' => ' اسلامشهر',],
        ['id' => 104, 'state_id' => 8, 'name' => ' بهارستان',],
        ['id' => 105, 'state_id' => 8, 'name' => ' پاكدشت',],
        ['id' => 106, 'state_id' => 8, 'name' => ' پرديس',],
        ['id' => 107, 'state_id' => 8, 'name' => ' پيشوا',],
        ['id' => 108, 'state_id' => 8, 'name' => ' تهران',],
        ['id' => 109, 'state_id' => 8, 'name' => ' دماوند',],
        ['id' => 110, 'state_id' => 8, 'name' => ' رباط كريم',],
        ['id' => 111, 'state_id' => 8, 'name' => ' ري',],
        ['id' => 112, 'state_id' => 8, 'name' => ' شميرانات',],
        ['id' => 113, 'state_id' => 8, 'name' => ' شهريار',],
        ['id' => 114, 'state_id' => 8, 'name' => ' فيروز كوه',],
        ['id' => 115, 'state_id' => 8, 'name' => ' قدس',],
        ['id' => 116, 'state_id' => 8, 'name' => ' قرچك',],
        ['id' => 117, 'state_id' => 8, 'name' => ' مالرد',],
        ['id' => 118, 'state_id' => 8, 'name' => ' ورامين',],



        ['id' => 119, 'state_id' => 9, 'name' => ' اردل',],
        ['id' => 120, 'state_id' => 9, 'name' => ' بروجن',],
        ['id' => 121, 'state_id' => 9, 'name' => ' بن',],
        ['id' => 122, 'state_id' => 9, 'name' => ' خانميرزا',],
        ['id' => 123, 'state_id' => 9, 'name' => ' شهر كرد',],
        ['id' => 124, 'state_id' => 9, 'name' => ' فارسان',],
        ['id' => 125, 'state_id' => 9, 'name' => ' كوهرنگ',],
        ['id' => 126, 'state_id' => 9, 'name' => ' كيار',],
        ['id' => 127, 'state_id' => 9, 'name' => ' لردگان',],


        ['id' => 128, 'state_id' => 10, 'name' => ' اسلاميه',],
        ['id' => 129, 'state_id' => 10, 'name' => ' باغستان',],
        ['id' => 130, 'state_id' => 10, 'name' => ' بشرويه',],
        ['id' => 131, 'state_id' => 10, 'name' => ' بيرجند',],
        ['id' => 132, 'state_id' => 10, 'name' => ' خوسف',],
        ['id' => 133, 'state_id' => 10, 'name' => ' درميان',],
        ['id' => 134, 'state_id' => 10, 'name' => ' زير كوه',],
        ['id' => 135, 'state_id' => 10, 'name' => ' سرايان',],
        ['id' => 136, 'state_id' => 10, 'name' => ' سربيشه',],
        ['id' => 137, 'state_id' => 10, 'name' => ' طبس',],
        ['id' => 138, 'state_id' => 10, 'name' => ' فردوس',],
        ['id' => 139, 'state_id' => 10, 'name' => ' قائنات',],
        ['id' => 140, 'state_id' => 10, 'name' => ' نهبندان',],


        ['id' => 141, 'state_id' => 11, 'name' => ' باخرز',],
        ['id' => 142, 'state_id' => 11, 'name' => ' باخرز',],
        ['id' => 143, 'state_id' => 11, 'name' => ' بجستان',],
        ['id' => 144, 'state_id' => 11, 'name' => ' بجستان',],
        ['id' => 145, 'state_id' => 11, 'name' => ' بردسكن',],
        ['id' => 146, 'state_id' => 11, 'name' => ' بردسكن',],
        ['id' => 147, 'state_id' => 11, 'name' => ' بينالود',],
        ['id' => 148, 'state_id' => 11, 'name' => ' تايباد',],
        ['id' => 149, 'state_id' => 11, 'name' => ' چناران',],
        ['id' => 150, 'state_id' => 11, 'name' => ' خليل آباد',],
        ['id' => 151, 'state_id' => 11, 'name' => ' خواف',],
        ['id' => 152, 'state_id' => 11, 'name' => ' خوشاب',],
        ['id' => 153, 'state_id' => 11, 'name' => ' داورزن',],
        ['id' => 154, 'state_id' => 11, 'name' => ' سرخس',],
        ['id' => 155, 'state_id' => 11, 'name' => ' فريمان',],
        ['id' => 156, 'state_id' => 11, 'name' => ' فيروزه',],
        ['id' => 157, 'state_id' => 11, 'name' => ' قوچان',],
        ['id' => 158, 'state_id' => 11, 'name' => ' كاشمر',],
        ['id' => 159, 'state_id' => 11, 'name' => ' صالح آباد',],
        ['id' => 160, 'state_id' => 11, 'name' => ' تربت جام',],
        ['id' => 161, 'state_id' => 11, 'name' => ' تربت حيدريه',],
        ['id' => 162, 'state_id' => 11, 'name' => ' جغتاي',],
        ['id' => 163, 'state_id' => 11, 'name' => ' جوين',],
        ['id' => 164, 'state_id' => 11, 'name' => ' درگز',],
        ['id' => 165, 'state_id' => 11, 'name' => ' رشتخوار',],
        ['id' => 166, 'state_id' => 11, 'name' => ' روشناوند',],
        ['id' => 167, 'state_id' => 11, 'name' => ' زاوه',],
        ['id' => 168, 'state_id' => 11, 'name' => ' سبزوار',],
        ['id' => 169, 'state_id' => 11, 'name' => ' كاشمر',],
        ['id' => 170, 'state_id' => 11, 'name' => ' كالت',],
        ['id' => 171, 'state_id' => 11, 'name' => ' گناباد',],
        ['id' => 172, 'state_id' => 11, 'name' => ' مشهد',],
        ['id' => 173, 'state_id' => 11, 'name' => ' مهوالت',],
        ['id' => 174, 'state_id' => 11, 'name' => ' نيشابور',],


        ['id' => 175, 'state_id' => 12, 'name' => ' اسفراين',],
        ['id' => 176, 'state_id' => 12, 'name' => ' بجنورد',],
        ['id' => 177, 'state_id' => 12, 'name' => ' جاجرم',],
        ['id' => 178, 'state_id' => 12, 'name' => ' رازوجرگالن',],
        ['id' => 179, 'state_id' => 12, 'name' => ' شيروان',],
        ['id' => 180, 'state_id' => 12, 'name' => ' فاروج',],
        ['id' => 181, 'state_id' => 12, 'name' => ' گرمه',],
        ['id' => 182, 'state_id' => 12, 'name' => ' مانه وسملقان',],


        ['id' => 183, 'state_id' => 13, 'name' => ' آبادان',],
        ['id' => 184, 'state_id' => 13, 'name' => ' آغاجاري',],
        ['id' => 185, 'state_id' => 13, 'name' => ' اميديه',],
        ['id' => 186, 'state_id' => 13, 'name' => ' انديكا',],
        ['id' => 187, 'state_id' => 13, 'name' => ' انديمشك',],
        ['id' => 188, 'state_id' => 13, 'name' => ' بهبهان',],
        ['id' => 189, 'state_id' => 13, 'name' => ' حميديه',],
        ['id' => 190, 'state_id' => 13, 'name' => ' خرمشهر',],
        ['id' => 191, 'state_id' => 13, 'name' => ' دزفول',],
        ['id' => 192, 'state_id' => 13, 'name' => ' دشت آزادگان',],
        ['id' => 193, 'state_id' => 13, 'name' => ' رامشير',],
        ['id' => 194, 'state_id' => 13, 'name' => ' كارون',],
        ['id' => 195, 'state_id' => 13, 'name' => ' گتوند',],
        ['id' => 196, 'state_id' => 13, 'name' => ' لالي',],
        ['id' => 197, 'state_id' => 13, 'name' => ' مسجد سليمان',],
        ['id' => 198, 'state_id' => 13, 'name' => ' هفتگل',],
        ['id' => 199, 'state_id' => 13, 'name' => ' هنديجان',],
        ['id' => 200, 'state_id' => 13, 'name' => ' هويزه',],
        ['id' => 201, 'state_id' => 13, 'name' => ' اهواز',],
        ['id' => 202, 'state_id' => 13, 'name' => ' ايذه',],
        ['id' => 203, 'state_id' => 13, 'name' => ' باغ ملك',],
        ['id' => 204, 'state_id' => 13, 'name' => ' باوي',],
        ['id' => 205, 'state_id' => 13, 'name' => ' بندر ماهشهر',],
        ['id' => 206, 'state_id' => 13, 'name' => ' رامشير',],
        ['id' => 207, 'state_id' => 13, 'name' => ' رامهرمز',],
        ['id' => 208, 'state_id' => 13, 'name' => ' شادگان',],
        ['id' => 209, 'state_id' => 13, 'name' => ' شوش',],
        ['id' => 210, 'state_id' => 13, 'name' => ' شوشتر',],



        ['id' => 211, 'state_id' => 14, 'name' => ' ابهر',],
        ['id' => 212, 'state_id' => 14, 'name' => ' ايجرود',],
        ['id' => 213, 'state_id' => 14, 'name' => ' خدابنده',],
        ['id' => 214, 'state_id' => 14, 'name' => ' خرمدره',],
        ['id' => 215, 'state_id' => 14, 'name' => ' زنجان',],
        ['id' => 216, 'state_id' => 14, 'name' => ' سلطانيه',],
        ['id' => 217, 'state_id' => 14, 'name' => ' طارم',],
        ['id' => 218, 'state_id' => 14, 'name' => ' ماه نشان',],

        ['id' => 219, 'state_id' => 15, 'name' => ' آرادان',],
        ['id' => 220, 'state_id' => 15, 'name' => ' دامغان',],
        ['id' => 221, 'state_id' => 15, 'name' => ' سرخه',],
        ['id' => 222, 'state_id' => 15, 'name' => ' سمنان',],
        ['id' => 223, 'state_id' => 15, 'name' => ' شاهرود',],
        ['id' => 224, 'state_id' => 15, 'name' => ' گرمسار',],
        ['id' => 225, 'state_id' => 15, 'name' => ' مهدي شهر',],
        ['id' => 226, 'state_id' => 15, 'name' => ' ميامي',],


        ['id' => 227, 'state_id' => 16, 'name' => ' بمپور',],
        ['id' => 228, 'state_id' => 16, 'name' => ' ،ايرانشهر',],
        ['id' => 229, 'state_id' => 16, 'name' => ' چاهبهار',],
        ['id' => 230, 'state_id' => 16, 'name' => ' خاش',],
        ['id' => 231, 'state_id' => 16, 'name' => ' دلگان',],
        ['id' => 232, 'state_id' => 16, 'name' => ' زابل',],
        ['id' => 233, 'state_id' => 16, 'name' => ' زاهدان',],
        ['id' => 234, 'state_id' => 16, 'name' => ' فنوج',],
        ['id' => 235, 'state_id' => 16, 'name' => ' قصر قند',],
        ['id' => 236, 'state_id' => 16, 'name' => ' كنارك',],
        ['id' => 237, 'state_id' => 16, 'name' => ' ميرجاوه',],
        ['id' => 238, 'state_id' => 16, 'name' => ' نيك شهر',],
        ['id' => 239, 'state_id' => 16, 'name' => ' نيمروز',],
        ['id' => 240, 'state_id' => 16, 'name' => ' زهك',],
        ['id' => 241, 'state_id' => 16, 'name' => ' سرباز',],
        ['id' => 242, 'state_id' => 16, 'name' => ' سراوان',],
        ['id' => 243, 'state_id' => 16, 'name' => ' سيب سوران',],
        ['id' => 244, 'state_id' => 16, 'name' => ' هامون',],
        ['id' => 245, 'state_id' => 16, 'name' => ' هيرمند',],


        ['id' => 246, 'state_id' => 17, 'name' => ' آباده',],
        ['id' => 247, 'state_id' => 17, 'name' => ' بيد',],
        ['id' => 248, 'state_id' => 17, 'name' => ' فراشبند',],
        ['id' => 249, 'state_id' => 17, 'name' => ' مرودشت',],
        ['id' => 250, 'state_id' => 17, 'name' => ' ارسنجان',],
        ['id' => 251, 'state_id' => 17, 'name' => ' خفر',],
        ['id' => 252, 'state_id' => 17, 'name' => ' فسا',],
        ['id' => 253, 'state_id' => 17, 'name' => ' ممسني',],
        ['id' => 254, 'state_id' => 17, 'name' => ' استهبان',],
        ['id' => 255, 'state_id' => 17, 'name' => ' اقليد',],
        ['id' => 256, 'state_id' => 17, 'name' => ' اوز',],
        ['id' => 257, 'state_id' => 17, 'name' => ' بختگان',],
        ['id' => 258, 'state_id' => 17, 'name' => ' بيضا',],
        ['id' => 259, 'state_id' => 17, 'name' => ' بوانات',],
        ['id' => 260, 'state_id' => 17, 'name' => ' بوانات',],
        ['id' => 261, 'state_id' => 17, 'name' => ' خنج',],
        ['id' => 262, 'state_id' => 17, 'name' => ' داراب',],
        ['id' => 263, 'state_id' => 17, 'name' => ' رستم',],
        ['id' => 264, 'state_id' => 17, 'name' => ' زرين دشت',],
        ['id' => 265, 'state_id' => 17, 'name' => ' سپيدان',],
        ['id' => 266, 'state_id' => 17, 'name' => ' فيروزآباد',],
        ['id' => 267, 'state_id' => 17, 'name' => ' قيرو كارزين',],
        ['id' => 268, 'state_id' => 17, 'name' => ' كازرون',],
        ['id' => 269, 'state_id' => 17, 'name' => ' كوار',],
        ['id' => 270, 'state_id' => 17, 'name' => ' مهر',],
        ['id' => 271, 'state_id' => 17, 'name' => ' نيريز',],
        ['id' => 272, 'state_id' => 17, 'name' => ' پاسارگاد',],
        ['id' => 273, 'state_id' => 17, 'name' => ' جهرم',],
        ['id' => 274, 'state_id' => 17, 'name' => ' خرامه',],
        ['id' => 275, 'state_id' => 17, 'name' => ' خرم',],
        ['id' => 276, 'state_id' => 17, 'name' => ' سپيدان',],
        ['id' => 277, 'state_id' => 17, 'name' => ' سرچهان',],
        ['id' => 278, 'state_id' => 17, 'name' => ' سروستان',],
        ['id' => 279, 'state_id' => 17, 'name' => ' شيراز',],
        ['id' => 280, 'state_id' => 17, 'name' => ' كوه چنار',],
        ['id' => 281, 'state_id' => 17, 'name' => ' گراش',],
        ['id' => 282, 'state_id' => 17, 'name' => ' لارستان',],
        ['id' => 283, 'state_id' => 17, 'name' => ' المرد',],
        ['id' => 284, 'state_id' => 17, 'name' => ' لارستان',],

        ['id' => 285, 'state_id' => 18, 'name' => ' آبيك',],
        ['id' => 286, 'state_id' => 18, 'name' => ' آوج',],
        ['id' => 287, 'state_id' => 18, 'name' => ' البرز',],
        ['id' => 288, 'state_id' => 18, 'name' => ' بوئين زهرا',],
        ['id' => 289, 'state_id' => 18, 'name' => ' تاكستان',],
        ['id' => 290, 'state_id' => 18, 'name' => ' قم',],

        ['id' => 291, 'state_id' => 19, 'name' => ' بانه',],
        ['id' => 292, 'state_id' => 19, 'name' => ' بيجار',],
        ['id' => 293, 'state_id' => 19, 'name' => ' دهگالن',],
        ['id' => 294, 'state_id' => 19, 'name' => ' ديواندره',],
        ['id' => 295, 'state_id' => 19, 'name' => ' سروآباد',],
        ['id' => 296, 'state_id' => 19, 'name' => ' سقز',],
        ['id' => 297, 'state_id' => 19, 'name' => ' سنندج',],
        ['id' => 298, 'state_id' => 19, 'name' => ' قروه',],
        ['id' => 299, 'state_id' => 19, 'name' => ' كامياران',],
        ['id' => 300, 'state_id' => 19, 'name' => ' مريوان',],


        ['id' => 301, 'state_id' => 20, 'name' => ' ارزوئيه',],
        ['id' => 302, 'state_id' => 20, 'name' => ' انار',],
        ['id' => 303, 'state_id' => 20, 'name' => ' بافت',],
        ['id' => 304, 'state_id' => 20, 'name' => ' بردسير',],
        ['id' => 305, 'state_id' => 20, 'name' => ' بم',],
        ['id' => 306, 'state_id' => 20, 'name' => ' جيرفت',],
        ['id' => 307, 'state_id' => 20, 'name' => ' رابر',],
        ['id' => 308, 'state_id' => 20, 'name' => ' زرند',],
        ['id' => 309, 'state_id' => 20, 'name' => ' سيرجان',],
        ['id' => 310, 'state_id' => 20, 'name' => ' شهربابك',],
        ['id' => 311, 'state_id' => 20, 'name' => ' عنبرآباد',],
        ['id' => 312, 'state_id' => 20, 'name' => ' فارياب',],
        ['id' => 313, 'state_id' => 20, 'name' => ' فهرج',],
        ['id' => 314, 'state_id' => 20, 'name' => ' قلعه گنج',],
        ['id' => 315, 'state_id' => 20, 'name' => ' نرماشير',],
        ['id' => 316, 'state_id' => 20, 'name' => ' راور',],
        ['id' => 317, 'state_id' => 20, 'name' => ' رفسنجان',],
        ['id' => 318, 'state_id' => 20, 'name' => ' رودبارجنوب',],
        ['id' => 319, 'state_id' => 20, 'name' => ' ريگان',],
        ['id' => 320, 'state_id' => 20, 'name' => ' كرمان',],
        ['id' => 321, 'state_id' => 20, 'name' => ' كوهبنان',],
        ['id' => 322, 'state_id' => 20, 'name' => ' كهنوج',],
        ['id' => 323, 'state_id' => 20, 'name' => ' منوجان',],


        ['id' => 324, 'state_id' => 21, 'name' => ' اسلام آبادغرب',],
        ['id' => 325, 'state_id' => 21, 'name' => ' پاوه',],
        ['id' => 326, 'state_id' => 21, 'name' => ' ثالث باباجاني',],
        ['id' => 327, 'state_id' => 21, 'name' => ' جوانرود',],
        ['id' => 328, 'state_id' => 21, 'name' => ' داالهو',],
        ['id' => 329, 'state_id' => 21, 'name' => ' روانسر',],
        ['id' => 330, 'state_id' => 21, 'name' => ' كرمانشاه',],
        ['id' => 331, 'state_id' => 21, 'name' => ' كنگاور',],
        ['id' => 332, 'state_id' => 21, 'name' => ' گيلان غرب',],
        ['id' => 333, 'state_id' => 21, 'name' => ' هرسين',],
        ['id' => 334, 'state_id' => 21, 'name' => ' روانسر',],
        ['id' => 335, 'state_id' => 21, 'name' => ' سرپل ذهاب',],
        ['id' => 336, 'state_id' => 21, 'name' => ' سنقر',],
        ['id' => 337, 'state_id' => 21, 'name' => ' صحنه',],
        ['id' => 338, 'state_id' => 21, 'name' => ' قصر شيرين',],

        ['id' => 339, 'state_id' => 22, 'name' => ' باشت',],
        ['id' => 340, 'state_id' => 22, 'name' => ' بويراحمد',],
        ['id' => 341, 'state_id' => 22, 'name' => ' بهمئي',],
        ['id' => 342, 'state_id' => 22, 'name' => ' چرام',],
        ['id' => 343, 'state_id' => 22, 'name' => ' دنا',],
        ['id' => 344, 'state_id' => 22, 'name' => ' كهگيلويه',],
        ['id' => 345, 'state_id' => 22, 'name' => ' گچساران',],
        ['id' => 346, 'state_id' => 22, 'name' => ' و لنده',],
        ['id' => 347, 'state_id' => 22, 'name' => ' مارگون',],

        ['id' => 348, 'state_id' => 23, 'name' => ' آزادشهر',],
        ['id' => 349, 'state_id' => 23, 'name' => ' آق قلا',],
        ['id' => 350, 'state_id' => 23, 'name' => ' بندرگز',],
        ['id' => 351, 'state_id' => 23, 'name' => ' تركمن',],
        ['id' => 352, 'state_id' => 23, 'name' => ' راميان',],
        ['id' => 353, 'state_id' => 23, 'name' => ' عليآباد كتول',],
        ['id' => 354, 'state_id' => 23, 'name' => ' گميشان',],
        ['id' => 355, 'state_id' => 23, 'name' => ' گنبدكاووس',],
        ['id' => 356, 'state_id' => 23, 'name' => ' مراوه تپه',],
        ['id' => 357, 'state_id' => 23, 'name' => ' مينودشت',],
        ['id' => 358, 'state_id' => 23, 'name' => ' كردكوي',],
        ['id' => 359, 'state_id' => 23, 'name' => ' كالله',],
        ['id' => 360, 'state_id' => 23, 'name' => ' گاليكش',],
        ['id' => 361, 'state_id' => 23, 'name' => ' گرگان',],

        ['id' => 362, 'state_id' => 24, 'name' => ' آستارا',],
        ['id' => 363, 'state_id' => 24, 'name' => ' آستانه اشرفيه',],
        ['id' => 364, 'state_id' => 24, 'name' => ' املش',],
        ['id' => 365, 'state_id' => 24, 'name' => ' بندرانزلي',],
        ['id' => 366, 'state_id' => 24, 'name' => ' رشت',],
        ['id' => 367, 'state_id' => 24, 'name' => ' رضوانشهر',],
        ['id' => 368, 'state_id' => 24, 'name' => ' صومعه سرا',],
        ['id' => 369, 'state_id' => 24, 'name' => ' طوالش',],
        ['id' => 370, 'state_id' => 24, 'name' => ' فومن',],
        ['id' => 371, 'state_id' => 24, 'name' => ' لاهيجان',],
        ['id' => 372, 'state_id' => 24, 'name' => ' لنگرود',],
        ['id' => 373, 'state_id' => 24, 'name' => ' ماسال',],
        ['id' => 374, 'state_id' => 24, 'name' => ' رودبار',],
        ['id' => 375, 'state_id' => 24, 'name' => ' رودسر',],
        ['id' => 376, 'state_id' => 24, 'name' => ' سياهكل',],
        ['id' => 377, 'state_id' => 24, 'name' => ' شفت',],

        ['id' => 378, 'state_id' => 25, 'name' => ' ازنا',],
        ['id' => 379, 'state_id' => 25, 'name' => ' اليگودرز',],
        ['id' => 380, 'state_id' => 25, 'name' => ' بروجرد',],
        ['id' => 381, 'state_id' => 25, 'name' => ' پلدختر',],
        ['id' => 382, 'state_id' => 25, 'name' => ' خرم آباد',],
        ['id' => 383, 'state_id' => 25, 'name' => ' دورود',],
        ['id' => 384, 'state_id' => 25, 'name' => ' دلفان',],
        ['id' => 385, 'state_id' => 25, 'name' => ' چگني',],
        ['id' => 386, 'state_id' => 25, 'name' => ' رومشكان',],
        ['id' => 387, 'state_id' => 25, 'name' => ' سلسله',],
        ['id' => 388, 'state_id' => 25, 'name' => ' كوهدشت',],

        ['id' => 389, 'state_id' => 26, 'name' => ' آمل',],
        ['id' => 390, 'state_id' => 26, 'name' => ' بابل',],
        ['id' => 391, 'state_id' => 26, 'name' => ' بابلسر',],
        ['id' => 392, 'state_id' => 26, 'name' => ' بهشهر',],
        ['id' => 393, 'state_id' => 26, 'name' => ' تنكابن',],
        ['id' => 394, 'state_id' => 26, 'name' => ' جويبار',],
        ['id' => 395, 'state_id' => 26, 'name' => ' سيمرغ',],
        ['id' => 396, 'state_id' => 26, 'name' => ' عباس آباد',],
        ['id' => 397, 'state_id' => 26, 'name' => ' فريدون كنار',],
        ['id' => 398, 'state_id' => 26, 'name' => ' قائم شهر',],
        ['id' => 399, 'state_id' => 26, 'name' => ' كالردشت',],
        ['id' => 400, 'state_id' => 26, 'name' => ' چالوس',],
        ['id' => 401, 'state_id' => 26, 'name' => ' رامسر',],
        ['id' => 402, 'state_id' => 26, 'name' => ' ساري',],
        ['id' => 403, 'state_id' => 26, 'name' => ' سوادكوه',],
        ['id' => 404, 'state_id' => 26, 'name' => '  سوادكوه شمالي',],
        ['id' => 405, 'state_id' => 26, 'name' => ' لگلوگاه',],
        ['id' => 406, 'state_id' => 26, 'name' => ' محمودآباد',],
        ['id' => 407, 'state_id' => 26, 'name' => ' مياندورود',],
        ['id' => 408, 'state_id' => 26, 'name' => ' نكاء',],
        ['id' => 409, 'state_id' => 26, 'name' => ' نور',],
        ['id' => 410, 'state_id' => 26, 'name' => ' نوشهر',],



        ['id' => 411, 'state_id' => 27, 'name' => ' اراك',],
        ['id' => 412, 'state_id' => 27, 'name' => ' آشتيان',],
        ['id' => 413, 'state_id' => 27, 'name' => ' تفرش',],
        ['id' => 414, 'state_id' => 27, 'name' => ' خمين',],
        ['id' => 415, 'state_id' => 27, 'name' => ' خنداب',],
        ['id' => 416, 'state_id' => 27, 'name' => ' دليجان',],
        ['id' => 417, 'state_id' => 27, 'name' => ' زرنديه',],
        ['id' => 418, 'state_id' => 27, 'name' => ' ساوه',],
        ['id' => 419, 'state_id' => 27, 'name' => ' شازند',],
        ['id' => 420, 'state_id' => 27, 'name' => ' فراهان',],
        ['id' => 421, 'state_id' => 27, 'name' => ' كميجان',],
        ['id' => 422, 'state_id' => 27, 'name' => ' محالت',],

        ['id' => 423, 'state_id' => 28, 'name' => ' ابوموسي',],
        ['id' => 424, 'state_id' => 28, 'name' => ' بستك',],
        ['id' => 425, 'state_id' => 28, 'name' => ' بشاگرد',],
        ['id' => 426, 'state_id' => 28, 'name' => ' بندرعباس',],
        ['id' => 427, 'state_id' => 28, 'name' => ' بندرلنگه',],
        ['id' => 428, 'state_id' => 28, 'name' => ' سيريك',],
        ['id' => 429, 'state_id' => 28, 'name' => ' قشم',],
        ['id' => 430, 'state_id' => 28, 'name' => ' ميناب',],
        ['id' => 431, 'state_id' => 28, 'name' => ' پارسيان',],
        ['id' => 432, 'state_id' => 28, 'name' => ' جاسك',],
        ['id' => 433, 'state_id' => 28, 'name' => ' حاجي آباد',],
        ['id' => 434, 'state_id' => 28, 'name' => ' خمير',],
        ['id' => 435, 'state_id' => 28, 'name' => ' رودان',],

        ['id' => 436, 'state_id' => 29, 'name' => ' همدان',],
        ['id' => 437, 'state_id' => 29, 'name' => ' ملایر',],
        ['id' => 438, 'state_id' => 29, 'name' => ' اسدآباد',],
        ['id' => 439, 'state_id' => 29, 'name' => ' بهار',],
        ['id' => 440, 'state_id' => 29, 'name' => ' پاليز',],
        ['id' => 441, 'state_id' => 29, 'name' => ' تويسركان',],
        ['id' => 442, 'state_id' => 29, 'name' => ' درگزين',],
        ['id' => 443, 'state_id' => 29, 'name' => ' رزن',],
        ['id' => 444, 'state_id' => 29, 'name' => ' فامنين',],
        ['id' => 445, 'state_id' => 29, 'name' => ' كبودرآهنگ',],
        ['id' => 446, 'state_id' => 29, 'name' => ' نهاوند',],

        ['id' => 447, 'state_id' => 30, 'name' => ' يزد',],
        ['id' => 448, 'state_id' => 30, 'name' => ' ابركوه',],
        ['id' => 449, 'state_id' => 30, 'name' => ' اردكان',],
        ['id' => 450, 'state_id' => 30, 'name' => ' اشكذر',],
        ['id' => 451, 'state_id' => 30, 'name' => ' بافق',],
        ['id' => 452, 'state_id' => 30, 'name' => ' بهاباد',],
        ['id' => 453, 'state_id' => 30, 'name' => ' تفت',],
        ['id' => 454, 'state_id' => 30, 'name' => ' خاتم',],
        ['id' => 455, 'state_id' => 30, 'name' => ' مهريز',],
        ['id' => 456, 'state_id' => 30, 'name' => ' ميبد',],

    ];

    $cities_selected =  [];
    foreach ($cities as $city) {
        if ($city['state_id'] == $city_id) {
            array_push($cities_selected, $city);
        }
    }
    return $cities_selected;
}
