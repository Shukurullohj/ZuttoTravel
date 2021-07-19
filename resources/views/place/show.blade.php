@extends('layouts.app')

@section('content')
 <section class="p-5 bg-gradient-to-r from-green-200 to-white m-0">
    <div class="flex justify-between">
        <h3 class="font-bold text-5xl">{{$place->name}}</h3>
        <div class="flex">
            <a href="{{$place->perfecture->path()}}" class="mr-10 font-extrabold text-4xl border-blue-200 text-blue-300  border-b-2">{{$place->perfecture->name}}</a>
            <h3 class="font-bold text-5xl mr-auto mx-5">{{$place->price}}$</h3>     
        </div>
        <img class="mr-1 relative rounded-full w-32 h-32" src="/{{$place->creator->avatar_path}}" alt="">
    </div>
    <div class="mt-4">
        <img class="float-left p-4" src="https://digital.ihg.com/is/image/ihg/ihg-trip-ideas-lp-home-featured-nyc-400x200" alt="">
        <p class="inline">{{$place->body}} Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus dolore odit temporibus minima nemo quia quod magni. Atque, tempore aperiam beatae esse sapiente maxime voluptatem eaque, tempora labore. Odio dolor praesentium facilis? Exercitationem, ea corrupti, illo quos eaque quo, eveniet ratione neque rerum incidunt placeat atque dolores earum. Placeat, sapiente, non. Ut quod, exercitationem ullam accusamus, dignissimos earum aperiam ratione velit dolores quaerat, repudiandae mollitia molestiae fugit cumque numquam cum provident adipisci! Quis deserunt earum fuga deleniti, cumque, possimus perferendis ad rerum laborum adipisci cum ex optio eaque vero illo quas expedita dolorem perspiciatis nobis ipsam, obcaecati enim! Alias perferendis quam ut ipsam pariatur omnis sed natus magnam explicabo dolorem soluta adipisci, ratione unde quos eius deserunt voluptatibus officia beatae. Est, ad unde fugit asperiores molestias facilis enim quidem, voluptas esse recusandae in sapiente. Voluptas excepturi itaque, dicta laboriosam rem soluta, nostrum sequi corporis dolorem eum omnis culpa reprehenderit consequuntur molestias vel, sit tempora magnam quo. Quasi esse ducimus atque porro, eligendi at consequuntur, ratione? Quidem, tempore animi adipisci aut dolor quibusdam ipsa similique, delectus, velit quis aperiam praesentium veritatis assumenda earum veniam molestias, reprehenderit odio quas eaque debitis corrupti consectetur perferendis sequi dolorum? Praesentium error nam similique quidem aliquam nisi ea eos, reiciendis. Impedit quas aut, quaerat quod nulla pariatur voluptas blanditiis quos culpa corrupti hic, a sint quo ipsum repellendus ducimus in dicta eos porro ab veniam consequuntur dolore. Vero dicta odio nesciunt? In, alias iste necessitatibus sunt animi tempore unde. Expedita provident iusto ipsam, veritatis labore ea nulla natus adipisci similique dolore assumenda sed tenetur reprehenderit, voluptatum aliquid dolor, quas impedit, voluptatem quis earum nam possimus soluta! Maiores officiis, corporis laborum hic asperiores molestias cumque porro non impedit soluta nobis molestiae, sunt et odit totam labore, recusandae debitis ad, possimus iste facere officia. Voluptates, animi ipsam error autem et eius at maxime cumque debitis voluptatem, atque, doloremque, iste. Quod autem harum, explicabo optio dignissimos voluptates eum facere quasi, voluptatibus similique illo at, cum minima ipsam architecto recusandae! Excepturi fugit quasi eligendi ratione culpa facere tempora iusto esse nulla laudantium eos laborum at, blanditiis, maxime, autem numquam atque beatae, cumque? Doloremque sed dignissimos commodi voluptatem animi, similique repudiandae aspernatur molestias illum harum eum quaerat, ad quam eveniet magnam laborum? Impedit laudantium, officia atque veritatis at qui ipsam assumenda molestiae dolorem obcaecati, fuga, dolore sapiente rerum similique odio commodi optio repudiandae reprehenderit. Maiores, nostrum vitae nemo illum distinctio placeat.</p>
        <a class="block text-right text-primary text-xl font-bold" href="/profiles/{{$place->creator->name}}">{{$place->creator->name}}</a>

    </div>
     @include('place.comment')
 </section>
@endsection
