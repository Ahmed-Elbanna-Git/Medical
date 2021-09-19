
    {!! Form::open(["route"=>$basicRoute.'.index','method'=>'GET',"id"=>"filterDataForm","class"=>"filterDataForm"])!!}

        <div class="d-inline-block">
            
            @if(method_exists($model,'getFilterColumns'))
               <div class="display_inline min_width_input">
                    <div id="m_table_1_filter" class="m-form__group m-form__group--inline">
                        
                        <div class="m-form__control">
                            <select class="form-control select2" id="select_an_option" placeholder="{!! trans('main.search_in') !!}" multiple name="search_columns[]" id="search_columns">
                                    
                                @foreach($model->getFilterColumns() as $columnName => $column )
                                    <option value="{!! $columnName !!}">
                                        {!! $column !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                    </div>
                </div>
            @endif

            <div class="display_inline min_width_input">
                <div id="m_table_1_filter" class="dataTables_filter m-form__group m-form__group--inline">
                    <div class="m-form__control">
                        <input type="search" class="form-control" placeholder="{!! trans('main.search_by') !!}" id="search" name="search_query"
                           name="search_query"
                           aria-controls="m_table_1">
                    </div>
                </div>

            </div>
            <div class="display_inline">
               <a href="#" title="" id="clear" class=" btn btn-danger">
                    <i class="la la-trash"></i>
                    <span>{{trans('main.clear')}}</span>
                </a>
            </div>

        </div>

    {!!Form::close()!!}

