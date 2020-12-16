<div>
    <p class="text-uppercase mt-4 font-weight-bold">Read More on</p>
    <div class="list-group list-group-flush">
        @for ($i = 0; $i < 5; $i++) <a href=""
            class="list-group-item list-group-item-action d-flex p-2 align-items-center">Keyword{{$i}}
            <span class="alert alert-info rounded p-1 px-2 ml-auto  m-0"
                style="font-size: 0.8rem">{{rand(0,100)}}</span></a> @endfor
    </div>
</div>