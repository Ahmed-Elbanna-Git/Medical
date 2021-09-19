<div class="m-form m-form--label-align-right">

    <div class=" align-items-center">
        <div class="static_height display_inline_btn">
             @include("layouts.grid.table_filter_inputs")
        </div>
        <!--
        <a href="#" title="" class="show_filter base_btn">
            <i class="fa fa-search"></i>
            <span>{{trans('main.search')}}</span>
        </a>
        -->
        <!-- <a href="#" title="" class="upload_btn base_btn"> -->
            <!-- <i class="fa fa-file-download"></i> -->
            <!-- <i class="fa fa-upload"></i>
            <span>{{trans('main.import')}}</span>
        </a> -->
<!--
        <a href="#" class="base_btn export_excel">
            <i class="la la-file-excel-o"></i>
            <span>
                {{trans("main.export_excel")}}
            </span>
        </a>

        <a href="#" class="base_btn export_pdf">
            <i class="la la-file-pdf-o"></i>
            <span>{{trans("main.export_pdf")}}</span>

        </a>
-->
    @if( !isset($hideCreateButton) || $hideCreateButton != false )
    <div class="display_inline_btn m--align-right">
        <a href="{!!route($basicRoute.'.create')!!}" class="btn btn-success">
            <i class="fa fa-plus"></i>
            <span>{{trans('main.add')}}</span>
        </a>
    </div>
    @endif

    </div>

</div>

