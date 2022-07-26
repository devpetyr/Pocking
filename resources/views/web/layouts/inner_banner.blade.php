@if ($inner_banner)    
<div class="banner innerBanner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="bannerCaption">
                    <h1>{{$inner_banner->name}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.innerBanner {
    background-image: url('{{asset($inner_banner->img)}}');
}   
</style>
@endif