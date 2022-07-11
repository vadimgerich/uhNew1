@if($action=="edit_ticket")
    <?php
    $id = $ticket->id;
    $phone_i = $ticket->phone_i;
    $name_i = $ticket->name_i;
    $city_i = $ticket->city_i;
    $city_id = $ticket->city_id;
    $address_i = $ticket->address_i;
    $location_i = $ticket->location_i;
    $alt_contact = $ticket->alt_contact;
    $tags_i = [];
    $need_evacuation = $ticket_message->need_evacuation;
    $need_help = $ticket_message->need_help;
    $comment_i = $ticket_message->comment_i;
    $featured_needs = $ticket->featured_needs;
    $cp_setted = $ticket->cp_setted;
    $cp_shutin = $ticket->cp_shutin;
    $cp_norm = $ticket->cp_norm;
    $cp_child = $ticket->cp_child;
    ?>
@elseif($action=='add_ticket')
    <?php
    $tags_used = [];
    $name_i = '';
    $city_i = '';
    $city_id = '0';
    $address_i = '';
    $location_i = '';
    $alt_contact = '';
    $tags_i = [];
    $need_evacuation = 0;
    $need_help = 0;
    $comment_i = '';
    $featured_needs = '';
    $cp_setted = 0;
    $cp_shutin = 0;
    $cp_norm = 0;
    $cp_child = 0;
    ?>
@endif

@if($action=="edit_ticket" or $action=="add_ticket")
    <div class="row" style="margin-left: 5px">
        <div class="col-md-12">
            <form class="form-horizontal" action="{{route('save_ticket')}}">
                @csrf
                @if($action=='edit_ticket')
                    <input type="hidden" name="id" value="{{$id}}">
                @endif
                <input type="hidden" name="action" value="do_{{$action}}">
                <div class="row">
                    <label for="phone_i" class="col-md-4 control-label">Телефон: </label>
                    <div class="col-md-8">
                        <input class="form-control input-md" type="text" value="{{$phone_i}}" name="phone_i"
                               id="phone_i">
                    </div>
                </div>
                <br>

                <div class="row">
                    <label for="name_i" class="col-md-4 control-label">Ім'я: </label>
                    <div class="col-md-8">
                        <input class="form-control input-md" type="text" value="{{$name_i}}" name="name_i" id="name_i">
                    </div>
                </div>
                <br>

                <div class="row">
                    <label for="city_i" class="col-md-4 control-label">На. пункт: </label>
                    <div class="col-md-8">
                        <input class="form-control input-md" type="text" value="{{$city_i}}" name="city_i" id="city_i">
                    </div>
                </div>
                <br>

                <div class="row" id="volonteur_div" style="display: none">
                    <label for="volonteur_id" class="col-md-4 control-label">Волонтер: </label>
                    <div class="col-md-8">
                        <select class="form-control input-md" name="volonteur_id" id="volonteur_id">
                            @foreach($volonteurs as $volonteur)
                                <option
                                    @if($action == 'edit_ticket')
                                    @if($volonteur->id == $ticket->volonteur_id)
                                    {{"selected"}}
                                    @endif
                                    @endif
                                    value="{{$volonteur->id}}">{{$volonteur->name_i}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>

                {{--                <div class="row" id="city_id_div" style="display: none">--}}
                {{--                    <label for="city_id" class="col-md-4 control-label">На. пункт (точний): </label>--}}
                {{--                    <div class="col-md-8">--}}
                {{--                        <select class="form-control input-md" name="city_id" id="city_id">--}}
                {{--                            @foreach($cityes as $city)--}}
                {{--                                <option value="{{$city->id}}">{{$city->name_i}}</option>--}}
                {{--                            @endforeach--}}
                {{--                        </select>--}}
                {{--                        {{print_r($cityesArr)}}--}}
                {{--                        <select class="form-control basicAutoSelect" name="city_id" id="city_id"--}}
                {{--                                placeholder="шукати..."--}}
                {{--                                data-default-value="0"--}}
                {{--                                data-default-text="-"--}}
                {{--                                data-url="{{$cityes}}" autocomplete="off">--}}
                {{--                        </select>--}}

                {{--                    </div>--}}
                {{--                </div><br>--}}

                <div class="row">
                    <label for="location_i" class="col-md-4 control-label">Адреса: </label>
                    <div class="col-md-8">
                        <input class="form-control input-md" type="text" value="{{$location_i}}" name="location_i"
                               id="location_i">
                    </div>
                </div>
                <br>

                <div class="row" id="address_i_div" style="display: none">
                    <label for="address_i" class="col-md-4 control-label">Адреса (точна): </label>
                    <div class="col-md-8">
                        <input class="form-control input-md" type="text" value="{{$address_i}}" name="address_i"
                               id="address_i">
                    </div>
                </div>
                <br>

                <div class="row">
                    <label for="alt_contact" class="col-md-4 control-label">Альт. контакт: </label>
                    <div class="col-md-8">
                        <input class="form-control input-md" type="text" value="{{$alt_contact}}" name="alt_contact"
                               id="alt_contact">
                    </div>
                </div>
                <br>

                <div class="row" id="cp_div" style="display: none">
                    <label for="cp" class="col-md-4 control-label">Люди: </label>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-3">
                                Ходячі :<br>
                                <input id="cp_norm" name="cp_norm" class="form-control input-md" type="text"
                                       value="{{$cp_setted}}">
                            </div>

                            <div class="col-md-3">
                                Сидячі :<br>
                                <input id="cp_setted" name="cp_setted" class="form-control input-md" type="text"
                                       value="{{$cp_shutin}}">
                            </div>

                            <div class="col-md-3">
                                Лежачі :<br>
                                <input id="cp_shutin" name="cp_shutin" class="form-control input-md" type="text"
                                       value="{{$cp_norm}}">
                            </div>

                            <div class="col-md-3">
                                Діти :<br>
                                <input id="cp_child" name="cp_child" class="form-control input-md" type="text"
                                       value="{{$cp_child}}">
                            </div>

                        </div>
                    </div>
                </div>
                <br>

                <div class="row" id="featured_needs_div" style="display: none;">
                    <label class="col-md-4 control-label" for="featured_needs">Ситуація / Особливі потреби :</label>
                    <div class="col-md-8">
                        <textarea id="featured_needs" name="featured_needs" rows="3"
                                  class="form-control">{{$featured_needs}}</textarea>
                    </div>
                </div>
                <br>

                <div class="row">
                    <label class="col-md-4 control-label">&nbsp;</label>
                    <div class="col-md-8">
                        <label class="checkbox-inline" for="is_infoservice">
                            <input name="is_infoservice" id="is_infoservice" value="1" type="checkbox">
                            Інфопослуга
                        </label>
                        &nbsp;
                        <label class="checkbox-inline" for="is_extended">
                            <input name="is_extended" id="is_extended" value="1" type="checkbox">
                            Розширені дані
                        </label>
                    </div>
                </div>
                <br>

                <div class="row" id="infoservice_type_div" style="display: none">
                    <label for="tags_i" class="col-md-4 control-label">Тема інфосервісу: </label>
                    <div class="col-md-8">
                        <select class="form-control input-md" name="infoservice_id" id="infoservice_id">
                            @foreach($infoservices as $infoservice)
                                <option value="{{$infoservice->id}}">{{$infoservice->name_i}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>

                <div class="row">
                    <label for="tags_i" class="col-md-4 control-label">Теги: </label>
                    <div class="col-md-8">
                        <select multiple="multiple" name="tags_selected[]" class="select2" id="tags_selected">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}"
                                        @foreach($tags_used as $used_tag)
                                        @if($used_tag->id == $tag->id)
                                        selected
                                    @endif
                                    @endforeach
                                >{{$tag->name_i}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>

                <div class="row">
                    <label class="col-md-4 control-label">Потреби: </label>
                    <div class="col-md-8">
                        <label class="checkbox-inline" for="need_evacuation">
                            <input name="need_evacuation" id="need_evacuation" value="{{$need_evacuation}}"
                                   @if($need_evacuation==1){{"checked"}}@endif type="checkbox">
                            Адресна евакуація
                        </label>
                        &nbsp;
                        <label class="checkbox-inline" for="need_help">
                            <input name="need_help" id="need_help" value="{{$need_help}}"
                                   @if($need_help==1){{"checked"}}@endif type="checkbox">
                            Адресна гуманітарка
                        </label>
                    </div>
                </div>
                <br>

                <div class="row">
                    <label for="featured_needs" class="col-md-4 control-label">Запит/примітки: </label>
                    <div class="col-md-8">
                        <textarea rows="5" class="form-control">{{$comment_i}}</textarea>
                    </div>
                </div>
                <br>

                <div class="row">
                    <button type="submit" id="save_user" name="save_user" class="btn btn-info">В роботу</button>
                    &nbsp;
                    @if(isset($back_to))
                        <button class="btn btn-info back_to_catalog_btn" id="back_to_catalog_btn_{{$id}}"
                                name="back_to_catalog_btn_{{$id}}">Назад
                        </button>
                    @else
                        <a class="btn btn-danger" id="back_to_mainpage_btn" name="back_to_mainpage_btn"
                           href="{{route('mainpage')}}">Назад</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endif
