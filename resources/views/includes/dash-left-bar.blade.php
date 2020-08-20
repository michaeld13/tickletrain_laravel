<div class="card w-100">
    <a href="" class="card-header bg-white d-flex align-items-center">
        <h5 class="ml-2 pt-2">{{$title}}</h5>
        
    </a>
    <div class="pb-3">
        <div class="car-menu">
            
            <a class="card-menu-item pt-2 pb-2 pl-3 pr-3 text-db cursor-pointer d-block">
                <span class="card-menu-item-icon"><i class="fa fa-plus"
                        aria-hidden="true"></i></span>
                <span class="ml-2">Add New Tickle</span>
            </a>

            <a class="card-menu-item pt-2 pb-2 pl-3 pr-3 text-db cursor-pointer d-block">
                <span class="card-menu-item-icon"><i class="far fa-images"></i></span>
                <span class="ml-2">Media Library</span>
            </a>

            <a class="card-menu-item pt-2 pb-2 pl-3 pr-3 text-db cursor-pointer d-block">
                <span class="card-menu-item-icon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                <span class="ml-2">Imap/SMTP Setting</span>
            </a>

            <a class="card-menu-item pt-2 pb-2 pl-3 pr-3 text-db cursor-pointer d-block">
                <span class="card-menu-item-icon"><i class="fas fa-ticket-alt"></i></span>
                <span class="ml-2">Open/View Tickets</span>
            </a>

            <a class="card-menu-item pt-2 pb-2 pl-3 pr-3 text-db cursor-pointer d-block">
                <span class="card-menu-item-icon"><i class="fas fa-calendar-alt"></i></span>
                <span class="ml-2">Add Reminder</span>
            </a>

            <a  href="{{route('timeline')}}" class="card-menu-item pt-2 pb-2 pl-3 pr-3 text-db cursor-pointer d-block">
                <span class="card-menu-item-icon">
                    <img src="{{ asset('public/images/timeline.svg')}}" width="16">
                </span>
                <span class="ml-2">Timeline</span>
            </a>

        </div>
    </div>
</div>