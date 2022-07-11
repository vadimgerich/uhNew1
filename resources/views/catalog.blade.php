@extends('layout')

@section('page_title')
    Catalog page
@endsection

@section('main-content')
    <div class="col-md-12">
        <form action="/catalog">
            <div class="row">
                <div class="col-md-2">
                    <label for="mode_with">Режим: </label>
                    <select id="mode_with" name="mode_with" class="form-control">
                        <option value="1">Всі вказані</option>
                        <option value="2">Один з вказаних</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="tags_list_with">З тегами: </label>
                    <select id="tags_list_with" name="tags_list_with" class="form-control">
                        <option value="1">Tag1</option>
                        <option value="2">Tag2</option>
                        <option value="3">Tag3</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="mode_without">Режим: </label>
                    <select id="mode_without" name="mode_without" class="form-control">
                        <option value="1">Без вказаних</option>
                        <option value="2">Жоден з вказаних</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="tags_list_without">Без тегів: </label>
                    <select id="tags_list_without" name="tags_list_without" class="form-control">
                        <option value="1">Tag1</option>
                        <option value="2">Tag2</option>
                        <option value="3">Tag3</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <label for="date_from">Створена з:</label>
                    <input name="date_from" id="date_from" type="text" class="form-control datepicker">
                </div>
                <div class="col-md-2">
                    <label for="date_to">Створена по:</label>
                    <input name="date_to" id="date_to" type="text" class="form-control datepicker">
                </div>
                <div class="col-md-5">
                    <label for="volonteur">Волонтер: </label>
                    <select id="volonteur" name="volonteur" class="form-control">
                        <option value="1">Volonteur 1</option>
                        <option value="2">Volonteur 2</option>
                        <option value="3">Volonteur 3</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="location">Локація: </label>
                    <select name="location" id="location" class="form-control">
                        <option value="0" selected="">Не фільтр адр.</option>
                        <option value="1">Без міста і адр.</option>
                        <option value="2">Тільки місто</option>
                        <option value="3">Тільки адр.</option>
                        <option value="4">В т.ч місто</option>
                        <option value="5">В т.ч адр.</option>
                        <option value="6">Місто або адр.</option>
                        <option value="7">Місто та адр.</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <input type="text" placeholder="Ключ пошуку" name="searchbar" id="searchbar" class="form-control">
                </div>
                <div class="col-md-2">
                    <select name="needs" id="needs" class="form-control">
                        <option value="0" selected="">Не фільтр потр</option>
                        <option value="1">Без потреб</option>
                        <option value="2">Тільки евак</option>
                        <option value="3">Тільки гум</option>
                        <option value="4">В т.ч евак</option>
                        <option value="5">В т.ч гум</option>
                        <option value="6">Евак або гум.</option>
                        <option value="7">Евак та гум.</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="is" id="is" class="form-control">
                        <option value="0" selected="">Не фільтр інфопос</option>
                        <option value="1">Без інфопос</option>
                        <option value="2">З інфопосл</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="form-control">
                </div>
                <div class="col-md-1">
                    <button type="button" id="export-excel" name="export-excel" class="btn btn-default" style="width:100%"><i class="fa fa-file-excel"></i></button>
                </div>
                <div class="col-md-1">
                    <button type="button" id="export-map" name="export-map" class="btn btn-default" style="width:100%"><i class="fa fa-map"></i></button>
                </div>
                <div class="col-md-1">
                    <button type="button" id="export-map-extended" name="export-map-extended" class="btn btn-default" style="width:100%"><i class="fa fa-map"></i>(2)</button>
                </div>
                <div class="col-md-1">
                    <button type="button" data-id="0" is_define_task="yes" class="btn btn-success" style="width:100%"><i class="fa fa-plus"></i></button>
                </div>
            </div>
        </form>
    </div><br>
    <div class="catalog">
        @foreach($tickets as $ticket)
            <div class="panel panel-default col-md-12">
                <div class="panel-body" id="ticket_edit_div_{{$ticket->id}}">

                </div>
                <div class="panel-body" id="ticket_div_{{$ticket->id}}">
                    <input type="hidden" id="ticket_phone_i_{{$ticket->id}}" name="ticket_phone_i" value="{{$ticket->phone_i}}">
                    {{$ticket->phone_i}} {{$ticket->name_i}}
                    <button data-id="{{$ticket->id}}" class="btn btn-success btn-xs pull-right edit-ticket-btn"><i class="fa fa-pencil-square-o"></i></button>&nbsp;
                    <span style="position:relative"><i class="fa fa-male"></i><span class="label label-danger label-sup">0</span></span>&nbsp;
                    <span style="position:relative"><i class="fa fa-wheelchair"></i><span class="label label-danger label-sup">0</span></span>&nbsp;
                    <span style="position:relative"><i class="fa fa-bed"></i><span class="label label-danger label-sup">0</span></span>&nbsp;
                    <span style="position:relative"><i class="fa fa-child"></i><span class="label label-danger label-sup">0</span></span>&nbsp;

                    @if($ticket->infoservice_id > 0)
                        <i class="fa fa-info-circle" style="color:#3c8dbc"></i>
                    @endif

                    @if(isset($ticket_messages[$ticket->id]))
                        @if($ticket_messages[$ticket->id]->need_help != 0)
                            <i class="fa fa-archive" style="color:#3c8dbc"></i>
                        @endif

                        @if($ticket_messages[$ticket->id]->need_evacuation != 0)
                            <i class="fa fa-truck" style="color:#3c8dbc"></i>
                        @endif
                    @endif

                    <i class="fa fa-map-pin" style="color:#F00"></i>

                    <br>
                    @if($ticket->address_i != '')
                        <i class="fa fa-map-pin"></i> {{$ticket->address_i}}
                        <br><br>
                    @endif

                    @if($ticket->featured_needs != '')
                        <strong>
                            {{$ticket->featured_needs}}
                        </strong><br>
                    @endif

                    @if(count($tagsT[$ticket->id])>0)
                        <i class="fa fa-tags"></i>

                        @foreach($tagsT[$ticket->id] as $tagsSet)
                            @if(count($tagsSet)>0)
                                <span class="badge badge-secondary">{{$tagsSet['name_i']}}</span>
                            @endif
                        @endforeach <br>
                    @endif
                    {{$ticket->time_i}} &nbsp;&nbsp; {{$ticket->time_update}}
                </div>
            </div><br><hr>
        @endforeach
    </div>
@endsection
