<?php

use Illuminate\Support\Facades\Http;

function templateParams(){
    return [
        // '{name}'=>trans('message'),
        '{action}'=>trans('action'),
        '{creator_name}'=>trans('main.creator_name'),
        '{request_name}'=>trans('main.request_name'),
        '{corporate_name}'=>trans('main.corporate_name'),
    ];
    
}

function templateParamsAsString(){
    
    $params = '';

    foreach(templateParams() as $key=>$value){
        $params .= $key.' => '.$value.',';
    }
    
    return substr($params,0,-1);
}

function userIsAdmin(){
    
    
    $userRole = (Auth()->user()->roles() && !empty(Auth()->user()->roles()) && count(Auth()->user()->roles()->get()) > 0) ? optional(Auth()->user()->roles())->first()->id : '' ;
    if (in_array($userRole,App\Helper\RoleID::ADMINSROLES)){
    
        return true;

    }
    
    return false;
}


function userIsCorporateAdmin(){
    
    
    $userRole = (Auth()->user()->roles() && !empty(Auth()->user()->roles()) && count(Auth()->user()->roles()->get()) > 0) ? optional(Auth()->user()->roles())->first()->id : '' ;
    if (in_array($userRole,App\Helper\RoleID::CORPORATEADMINROLES)){
    
        return true;

    }
    
    return false;
}

function getNotificationIteration(){
    return [
        1=>trans('main.one_day'),// one day
        3=>trans('main.every_3_day'),// 3 days 
        7=>trans('main.every_week'), // every week
        10=>trans('main.every_10_day'), // every 10 days 
    ];
}
function getSortingType($columnName = ''){
    
    $sortingType = 'ASC';

    if (request()->has('sorttype') && !empty(request()->sorttype) && request()->sorttype == 'ASC' ) {
        $sortingType = 'DESC';
    }

    if ($columnName != '' && request()->has('sortby') && !empty(request()->sortby) && $columnName == request()->sortby) {
        
        return $sortingType;
    }

    return '';
    

}

function getRequestFullUrl($extraData = []){

    $urlParamaters = request()->all();

    $url = '';
    
    $allRequestKeys = [];

    if (!empty($urlParamaters)) {

        foreach($urlParamaters as $key => $value ){
            
            if (in_array($key,$allRequestKeys)) {
                continue;
            }

            array_push($allRequestKeys,$key);

            if (str_contains($url,'&')) {
            
                $url .= '&';
            
            }
            if (is_array($value)) {
                foreach ($value as $subKey => $subValue) {
                    $url .= $key.'['.$subKey.']'.'='.$subValue.'&';       
                }
            }else{
                $url .= $key.'='.$value;    
            }

        }
    }

    foreach($extraData as $key=>$value){
        
        if (in_array($key,$allRequestKeys)) {
            continue;
        }

        array_push($allRequestKeys,$key);

        if (str_contains($url,'&')) {
            $url .= '&';
        }
        
        $url .= $key.'='.$value;    
    }
    
    return request()->url().'?'.urlencode($url.'&');

}

function getInputDependOnType($type , $customFieldInputName , $value , $options = '' ){

    $input = '';

    if ($type == 'text') {
        $input .= '<input type="text" class="form-control  '.$options .'" name="'. $customFieldInputName .'" required value="'.$value.'">';
    }

    if ($type == 'textarea') {
        $input .= '<textarea class="form-control '.$options .'" name="'. $customFieldInputName .'" required>'
            . $value .
        '</textarea>';
    }

    if ($type == 'file') {
        $input  = '<input type="file" class="form-control  '.$options .'" name="'.$customFieldInputName .'" required value="'. $value .'">';
    }

    if ($type == 'number') {
        $input  = '<input type="number" class="form-control '. $options .'" name="'. $customFieldInputName .'" required value="'.$value .'">';   
    }
    
    return $input;
}

function getCategories(){
    $name = 'name_'.app()->getLocale();
    $categories = \DB::table('categories')->select(\DB::raw($name.' as name , id '))->get()->pluck('name','id');
    return $categories;
}

function getOptionValues(){
    return [
        'select'=>'SELECT',
        'radio_button'=>'Radio',
        'check_box'=>'Check box',
    ];
}

function str_random($length){

    $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $randomString = substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    
    return $randomString;
}

function appSettings($key){  

    $settings = \DB::table('settings')->select('value')->where('name',$key)->get();
    
    if (count($settings) > 0 ) {
        return $settings[0]->value;
    }

    return '';
}

function getImagePath($image = null){

    if (isset($image) && !empty($image) && file_exists(base_path().'/../'.$image)) {
        return url('/').$image;
    }
    return url('/').'/dashboard/images/profile_default.png';
}

function notifications()
{
    $user = Auth()->user();
    return $user->notifications()->without('user')->latest()->paginate(30);
}


function notifications_count()
{
    $user = Auth()->user();
    return count($user->notifications);
}


function extensions(){
    $query_result = \Illuminate\Support\Facades\DB::Select("select id from users where manager_id=" . Auth()->user()->id . " or team_leader_id=" . Auth()->user()->id);
    $operatin=App\Models\LeadOperation::orderByRaw("operation_date DESC, operation_time ASC")
    ->where("user_id", Auth()->user()->id)
    ->orWhereIn("user_id", json_decode(json_encode($query_result), true))->distinct()
    ->paginate(30);
    return $operatin;
}

function getYoutubeId($url)
{
    /*
     Here is a sample of the URLs this regex matches: (there can be more content after the given URL that will be ignored)
     http://youtu.be/dQw4w9WgXcQ
     http://www.youtube.com/embed/dQw4w9WgXcQ
     http://www.youtube.com/watch?v=dQw4w9WgXcQ
     http://www.youtube.com/?v=dQw4w9WgXcQ
     http://www.youtube.com/v/dQw4w9WgXcQ
     http://www.youtube.com/e/dQw4w9WgXcQ
     http://www.youtube.com/user/username#p/u/11/dQw4w9WgXcQ
     http://www.youtube.com/sandalsResorts#p/c/54B8C800269D7C1B/0/dQw4w9WgXcQ
     http://www.youtube.com/watch?feature=player_embedded&v=dQw4w9WgXcQ
     http://www.youtube.com/?feature=player_embedded&v=dQw4w9WgXcQ
     It also works on the youtube-nocookie.com URL with the same above options.
     It will also pull the ID from the URL in an embed code (both iframe and object tags)
    */
    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
    if (isset($match[1])) {
        return $match[1];
    }
    return "";
}

function getExcerpt($html,$numberOfCharachters = 15, $ellipses = true)
{

    $excerpt = strip_tags($html);
    $excerpt = preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $excerpt);
    $excerpt = str_replace('<p>','',$excerpt);
    $excerpt = str_replace('</p>','',$excerpt);
    $excerpt = str_replace('\n','',$excerpt);
    $excerpt = str_replace('<\r>','',$excerpt);
    if ($numberOfCharachters >= strlen($excerpt)) {
        return $excerpt;
    }
    // find last space within numberOfCharachters
    $last_space = strrpos(substr($html, 0, $numberOfCharachters), ' ');
    $trimmed_text = substr($html, 0, $last_space);
    //add ellipses (...)
    if ($ellipses)
        $trimmed_text .= "...";

    $trimmed_text = str_replace('<p>','',$trimmed_text);
    $trimmed_text = str_replace('</p>','',$trimmed_text);
    $trimmed_text = str_replace('\n','',$trimmed_text);
    $trimmed_text = str_replace('<\r>','',$trimmed_text);
    return $trimmed_text;

}

//Json array response
function responseJson($status, $msg, $data = null)
{
    $response = [
        'status' => (int)$status,
        'message' => $msg,
        'data' => $data,
    ];
    return response()->json($response);
}

function saveImage($file, $folder = '/')
{
    // dd($file);
    $extension = $file->getClientOriginalExtension(); // getting image extension
    $fileName = time() . '' . rand(11111, 99999) . '.' . $extension; // renameing image
    // $dest = public_path('/uploads' . $folder);
    $dest = base_path().'/../uploads'.$folder;

    $file->move($dest, $fileName);
    return '/uploads' . $folder . '/' . $fileName;
}

// one signal notification code
function oneSignalNotification($audience = ['included_segments' => ['All']], $contents = ['en' => ''], $data = [])
{
    // audience include_player_ids
    $appId = ['app_id' => env('ONE_SIGNAL_APP_ID')];

    $fields = json_encode((array)$appId + (array)$audience + ['contents' => (array)$contents] + ['data' => (array)$data] + ['ios_badgeType' => 'Increase', 'ios_badgeCount' => 1] + ['headings' => ['en' => 'Mswrati مصوراتي']]);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://onesignal.com/api/v1/notifications');
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json; charset=utf-8',
        'Authorization: Basic ' . env('ONE_SIGNAL_KEY')]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}


// Firebase notification code

function firebaseNotification($title, $body, $tokens, $type = 'STUDENT', $click_action = null, array $data = null)
{
    // https://gist.github.com/rolinger/d6500d65128db95f004041c2b636753a

    $registrationIDs = $tokens;
    $fcmMsg = [
        'body' => $body,
        'title' => $title,
        'click_action' => $click_action,
        // 'sound' => "default",
        // 'color' => "#203E78"
    ];
    $fcmFields = [
        'registration_ids' => $registrationIDs,
        'priority' => 'high',
        'notification' => $fcmMsg,
        'data' => $data,
    ];
    $headers = [
        'Authorization: key=' . env("FIREBASE_{$type}_KEY"),
        'Content-Type: application/json',
    ];


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmFields));
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}


function showGetUrlHelper($url, $auditable_type, $auditable_id)
{

    // check model record
    $first_model_record = $auditable_type::where('id', $auditable_id)->first();

    if ((isset($first_model_record->status) and $first_model_record->status == "1")
        || (isset($first_model_record) and !isset($first_model_record->status))) {

        if (routeMatchingUrl($url))
            return url($url);

    }
}

function routeMatchingUrl($url)
{


    $response = Http::get($url);

    if ($response->successful()) {
        // route exists
        return true;
    } else {
        // route doesn't exist
        return false;

    }


    /*    $routes = \Illuminate\Support\Facades\Route::getRoutes();
        $request = \Illuminate\Support\Facades\Request::create($url);
        try {
            $routes->match($request);
            // route exists
            return true;
        } catch (\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e) {
            // route doesn't exist
            return false;
        }*/
}