<a {{$attributes}} class="{{request()->is() ? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative'}}  rounded-lg" >{{$slot}}</a>
