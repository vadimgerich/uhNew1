<?php

namespace App\Http\Controllers;

use App\Models\sdb_users;
use App\Models\User;
use App\Models\tickets;
use App\Models\tags;
use App\Models\tags_links;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    public function isLoggedIn($url){
        if((session('login')=='') and (session('password')=='')){
            return 'login';
        }else{
            return $url;
        }
    }

    public function edit_ticket_window(Request $request){
        return view('edit_ticket_window')->with(['id'=>$request['id']]);
    }

    public function ajax_call(Request $request){
        $url = 'ajax_call';
        if($this->isLoggedIn($url)!='ajax_call'){
            return redirect('login');
        }
        if($request['phone_number']!=''){
            $ticket = DB::select("SELECT * FROM tickets WHERE phone_i LIKE '%".$request['phone_number']."'");
            $infoservices = DB::select("SELECT * FROM infoservices ORDER BY order_i");
            $tags = DB::select("SELECT * FROM tags");
            $cityes = DB::select("SELECT * FROM cityes");
            $volonteurs = DB::select("SELECT * FROM usrs WHERE role_id = 3");
//            $cityesArr = array();
//            foreach ($cityes as $city){
//                $cityesArr[] = array("value" => $city->id,"text" => $city->name_i);
//            }
//            $cityesArr = json_encode($cityesArr);
            if(count($ticket)<1){
                return view($url)->with([
                    'phone_i'=>$request['phone_number'],
                    'infoservices'=>$infoservices,
                    'tags'=>$tags,
                    'tags_used'=>[],
                    'volonteurs'=>$volonteurs,
//                'cityes'=>$cityesArr,
                    'cityes'=>$cityes,
                    'action'=>'add_ticket'])->render();
            }
            $tags_used = DB::select("SELECT * FROM tags WHERE id IN(SELECT tag_id FROM tags_links WHERE target_id = '".$ticket[0]->id."')");
            $ticket_message = DB::selectOne("SELECT * FROM tickets_messages WHERE ticket_id ='".$ticket[0]->id."' ORDER BY time_i LIMIT 1");

            return view($url)->with([
                'back_to'=>$request['back_to'],
                'infoservices'=>$infoservices,
                'ticket_message'=>$ticket_message,
                'ticket'=>$ticket[0],
                'tags'=>$tags,
                'volonteurs'=>$volonteurs,
                'tags_used'=>$tags_used,
//                'cityes'=>$cityesArr,
                'cityes'=>$cityes,
                'action'=>'edit_ticket'])->render();
        }
    }

    public function catalog(Request $request){
        $tickets = DB::select("SELECT * FROM tickets LIMIT 20");
        $tagsT=[];
        $ticket_messages = [];
        foreach ($tickets as $ticket){
            $id = $ticket->id;
            $ticketTags = DB::select("SELECT tag_id FROM tags_links WHERE target_id = '$ticket->id'");
            $tagsT[$ticket->id]=[];
            foreach($ticketTags as $ticketTag) {
                if($name_i = DB::selectOne("SELECT name_i FROM tags WHERE id='$ticketTag->tag_id'")) {
                    $tagsT[$ticket->id][] = ['id' => $ticketTag->tag_id, 'name_i' => $name_i->name_i];
                }
            }
            $ticket_messages[$ticket->id] = DB::selectOne("SELECT * FROM tickets_messages WHERE ticket_id = '$ticket->id'");
        }
        return view('/catalog')->with(['tickets'=>$tickets, 'tagsT'=>$tagsT,'ticket_messages'=>$ticket_messages]);
    }

    public function save_ticket(Request $request){
        $url = 'save_ticket';
        if($this->isLoggedIn($url)!='save_ticket'){
            return redirect('login');
        }
        $action = $request['action'];
        $phone_i = $request['phone_i'];
        $name_i = $request['name_i'];
        $city_i = $request['city_i'];
        $address_i = $request['address_i'];
        $location_i = $request['location_i'];
        $alt_contact = $request['alt_contact'];
        $tags_i = [];
        $time_update = date('y-m-d h:i:s');
        $need_evacuation = $request['need_evacuation'];
        $need_help = $request['need_help'];
        $comment_i = $request['comment_i'];
        $featured_needs = $request['featured_needs'];
        $cp_setted = $request['cp_setted'];
        $cp_shutin = $request['cp_shutin'];
        $cp_norm = $request['cp_norm'];
        $cp_child = $request['cp_child'];
        $city_i = $request['city_i'];
        $status_i = 1; // need to get know what does mean status_i
        $infoservice_id = $request['infoservice_id'];
        $city_id = 0; //need to make it later
        $volonteur_id = $request['volonteur_id'];
        $site_id = 2;
        $lat = 0; //how to fuck know how to get it?!?!?!?!?!
        $lon = 0; //how to fuck know how to get it?!?!?!?!?!

        if($request['action']=="do_edit_ticket"){
            $id = $request['id'];
            $full_search = $id." ".$phone_i." ".$name_i." ".$city_i." ".$location_i;
            $sql1 = DB::update("UPDATE tickets SET".
                " phone_i = '$phone_i',".
                " name_i = '$name_i',".
                " city_i = '$city_i',".
                " location_i = '$location_i',".
                " alt_contact = '$alt_contact',".
                " site_id = '$site_id',".
                " full_search = '$full_search',".
                " time_update = '$time_update',".
                " status_i = '$status_i',".
                " infoservice_id = '$infoservice_id',".
                " city_id = '$city_id',".
                " address_i = '$address_i',".
                " cp_norm = '$cp_norm',".
                " cp_shutin = '$cp_shutin',".
                " cp_setted = '$cp_setted',".
                " cp_child = '$cp_child',".
                " featured_needs = '$featured_needs',".
                " volonteur_id = '$volonteur_id',".
                " lat = '$lat',".
                " lon = '$lon'"."
                WHERE id = '$id'");
//            $u_id = uniqid();
//            $usr_id = session("usr_id");
//            $sql2 = DB::update("UPDATE tickets_messages SET ".
//                "u_id = '$u_id'".
//                "ticket_id = '$id'".
//                "time_i = '$time_update'".
////                "usr_id = '$usr_id'".
//                "site_id = '$site_id'".
//                "comment_i = '$comment_i'".
//                "need_evacuation = '$need_evacuation'".
//                "need_help = '$need_help'");
        }else{
            $u_id = uniqid();
            $time_i = date('y-m-d h:i:s');
            $usr_id = session('usr_role_id');
            $full_search = $phone_i." ".$name_i." ".$city_i." ".$location_i;$volonteur_id = $request['volonteur_id']; //need to make it later
            $sql1 = DB::insert("INSERT INTO tickets (u_id,time_i,usr_id,phone_i,name_i,".
                "city_i,location_i,alt_contact,site_id,full_search,".
                "time_update,status_i,infoservice_id,city_id,address_i,".
                "cp_norm,cp_setted,cp_shutin,cp_child,featured_needs,".
                "volonteur_id,lat,lon) ".
                "VALUES ('$u_id','$time_i','$usr_id','$phone_i','$name_i',".
                "'$city_i','$location_i','$alt_contact','$site_id','$full_search',".
                "'$time_update','$status_i','$infoservice_id','$city_id','$address_i',".
                "'$cp_norm','$cp_setted','$cp_shutin','$cp_child','$featured_needs',".
                "'$volonteur_id','$lat','$lon')");
            $sql2 = DB::selectOne("SELECT id FROM tickets ORDER BY id DESC LIMIT 1");
            $u_id2 = uniqid();
            $ticket_id = $sql2->id;
            $sql3 = DB::insert("INSERT INTO tickets_messages (u_id,ticket_id,".
                "time_i,usr_id,site_id,commet_i,need_evacuation,need_help) VALUES (".
                "'$u_id2','$ticket_id',".
                "'$time_i','$usr_id','$site_id','$comment_i','$need_evacuation','$need_help'");
            $sql4 = DB::delete("DELETE FROM tags_links WHERE ticket_id = '$ticket_id'");

//            ДОРОБИТИ ОБРОБКУ ТЕГІВ
//            foreach ($tags as $tag){
//                $u_id = uniqid();
//                $sql5 = DB::insert("INSERT INTO tags_links (u_id,site_id,tag_id,target_id,type_i)".
//                    "VALUES ('$u_id','$site_id','$tag_id','$target_id','$type_i')");
//            }
        }
        return redirect()->route('mainpage')->with(['action'=>$action]);
    }

    public function mainpage(Request $request)
    {
        $url = 'mainpage';
        if($this->isLoggedIn($url)!='mainpage'){
            return redirect('login');
        }
        return view($url)->with(['searchTicket'=>$request['searchTicket'],'newUser'=>'no']);
    }

    public function register(Request $request){
        return view('register');
    }


    public function login(Request $request)
    {
        return view('login');
    }
}
