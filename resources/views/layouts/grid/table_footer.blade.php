<div class="row dataTables_wrapper ">
    <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="m_table_1_info" role="status" aria-live="polite">{{__('main.show')}}
            {{$resources->firstItem()}} {{__('main.to')}} {{$resources->lastItem()}} {{__('main.from')}} {{$resources->total()}}
            {{__('main.record')}}
        </div>
    </div>
    <div class="col-sm-12 col-md-7 dataTables_pager">
        <div class="dataTables_length" id="m_table_1_length">
            <label>{{trans('main.show')}} 
                <select name="limit" class="custom-select custom-select-sm form-control form-control-sm " id="limit">
                    <option {{ (request()->has('limit') && request()->limit == 10 ) ? 'selected' : ''}} value="10">10</option>
                    <option {{ (request()->has('limit') && request()->limit == 25 ) ? 'selected' : ''}} value="25">25</option>
                    <option {{ (request()->has('limit') && request()->limit == 50 ) ? 'selected' : ''}}  value="50">50</option>
                    <option {{ (request()->has('limit') && request()->limit == 100 ) ? 'selected' : ''}} value="100">100</option>
                </select>
            </label>
        </div>
        <div class="dataTables_paginate paging_simple_numbers" id="m_table_1_paginate">
            {{ $resources->onEachSide(1)->links() }}
        </div>
    </div>
</div>
