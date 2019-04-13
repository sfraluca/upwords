<div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-navbar fixed-top">
                <a class="navbar-brand" href="index.html">JOB LISTING</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=" navbar-toggler-icon">Menu</span>
                </button><h4 >{{ Auth::user()->name }}</h4> 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        @foreach (config('app.available_locales') as $locale)
                            <li >
                        <a class="nav-link"
                                href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
                                @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                            </li>
						@endforeach
                                 <li ><a class="nav-link" href="{{ route('admin.logout', app()->getLocale())}}"><i class="fas fa-power-off mr-2"></i>@lang('header.logout')</a>
                            </li>
                    </ul>
                </div>
            </nav>
        </div>