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
        {{-- END OF SIDE BAR --}} {{-- START OF CONTENTS--}}
        <div class="col-lg-9 UdDesignMain">
            <div class="row">

                <div class="col-lg-6  mt-2 mb-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12  salesTab">Sales</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12  profitsTab">Profit</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12  expensesTab">Expenses</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12  targetTabs">Target Sales</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6  mt-2 mb-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <h6 style="color: #fff;">Printing, PhotoCopy etc</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12  printingChart">Chart</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 ">
                                <h6 style="color: #fff;">Merch etc</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12  merchChart">Chart</div>
                        </div>
                    </div>
                   
                </div>

            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
    {{-- END OF CONTENTS--}}
</div>
{{-- END --}}
