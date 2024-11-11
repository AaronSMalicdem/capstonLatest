{{-- <div class="col-lg-12 side-bar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{url('/admin/dashboard')}}"> <i class="fa-solid fa-border-all"></i><span></span> </a>
        </li>
        <li class="nav-item">
            <a href="{{url('/admin/sales')}}"> <i class="fa-solid fa-chart-line"></i><span></span> </a>
        </li>
        <li class="nav-item">
            <a href="{{url('/admin/expenses')}}"> <i class="fa-solid fa-wallet"></i><span></span> </a>
        </li>
        <li class="nav-item">
            <a href="{{url('/admin/promos')}}"> <i class="fa-solid fa-tags"></i><span></span> </a>
        </li>
        <li class="nav-item">
            <a href="{{url('/admin/feedbacks')}}"> <i class="fa-solid fa-star"></i><span></span> </a>
        </li>
    </ul>
</div>
 --}}
 <div class="col-lg-1">
    <div class="row mt-5"></div>
    <div class="row mt-4">
        {{-- SIDEBAR --}}
        <div class="col-lg-6 sidebar" style="height: 300px; background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px); max-width:60px; border-radius:30px; z-index:1;">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{url('/admin/dashboard')}}" data-tooltip="Main Dashboard"> 
                        <i class="fa-solid fa-border-all" style="color: white; margin-bottom: 8px; margin-top: 8px;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/sales')}}" data-tooltip="Sales"> 
                        <i class="fa-solid fa-chart-line" style="color: white; margin-bottom: 8px;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/expenses')}}" data-tooltip="Expenses"> 
                        <i class="fa-solid fa-wallet" style="color: white; margin-bottom: 8px;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/promos')}}" data-tooltip="Promos"> 
                        <i class="fa-solid fa-tags" style="color: white; margin-bottom: 8px;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/feedbacks')}}" data-tooltip="Feedbacks"> 
                        <i class="fa-solid fa-star" style="color: white; margin-bottom: 8px;"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-lg-6"></div>
    </div>
</div>