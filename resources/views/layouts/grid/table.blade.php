<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
        <table class="table nowrap data_table dataTable table-hover table-checkable
                         table-striped m-table m-table--head-bg-success custom_table">
            <thead>
                @yield('table_header')
            </thead>
            <div id="load">
                <div class="lds-roller">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <tbody class="date">
                @yield('table_body')
            </tbody>
        </table>
        </div>
    </div>
</div>
