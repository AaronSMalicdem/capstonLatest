{{-- START --}}
<div class="container text-center content-container">
    <div class="row mb-5">
        {{-- START OF SIDE BAR --}}
        <div class="col-lg-1"></div>
        <div class="col-lg-1">
            <div class="container">
                <div class="row">
                    @include('general.uddesign.sidebar')
                </div>
            </div>
        </div>
        {{-- END OF SIDE BAR --}} 
        {{-- START OF CONTENTS--}}
        <div class="col-lg-9 UdDesignSales">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 totalSales paymentMethod mt-2 mb-2">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="col-lg-12">Total Sales</div>
                                <div class="col-lg-12">Print/Photo: </div>
                                <div class="col-lg-12">Merch:</div>
                                <div class="col-lg-12">Deals:</div>
                            </div>
                            <div class="col-lg-6">Payment Method</div>
                        </div>
                    </div>
                    <div class="col-lg-6 salesChart  mt-2 mb-2">Chart Here</div>
            </div>
            
            <div class="row">
                <div class="col-lg-7 mt-2 mb-2 salesByCat">Sales By Category</div>
                <div class="col-lg-5 mt-2 mb-2 topSell">Top selling</div>
            </div>
        
        
            </div>
            </div>
                
            <div class="col-lg-1"></div>
    </div>
    {{-- END OF CONTENTS--}}
</div>
{{-- END --}}
