<div class="flash.message">
                    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('allert-'.$msg))
                            <p class="alert alert-{{$msg}}">
                                {{ Session::get('alert-'.$msg) }} 
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            </p>
                        @endif
                    @endforeach
                </div>

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif