<div class="law-card-area pt-100">
    <div class="container">
        <div class="card-contant">
            <div class="row no-gutters">
            
        @foreach ($services as $service)
                <div class="col-lg-3 bor-right col-sm-6">
                    <div class="low-card">
                        <h3>{{$service->name}}</h3>
                        <i class="las la-balance-scale"></i>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
        @endforeach
            </div>
        </div>
    </div>
</div>