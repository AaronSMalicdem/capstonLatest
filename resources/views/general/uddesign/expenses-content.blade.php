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
        <div class="col-lg-9 UdDesignExpenses">
           <div class="container">
            <div class="row">
                <div class="col-lg-5 totalexpenses mt-2 mb-2">
                    <div class="row">
                        <div class="col-lg-6">Total Expenses</div>
                        <div class="col-lg-6">Payment Method</div>
                    </div>
                </div>
                <div class="col-lg-7 expensesChart mt-2 mb-2">Expense Chart Here</div>
            </div>
            <div class="row">
                <div class="col-lg-5 mt-2 mb-2 recentPur" style="color: #fff;">Recently Purchased:</div>
                <div class="col-lg-7 mt-2 mb-2 expenseByCat">Sales By Category</div>
            </div>
        </div>
        
           </div>
           <div class="col-lg-1"></div>
    </div>
    {{-- END OF CONTENTS--}}
</div>
{{-- END --}}
