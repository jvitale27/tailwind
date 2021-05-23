<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- ... --->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <title>Tailwind</title>

        <style>
          .imagen {
            background-image: url("{{ asset('img/20200723_205956.jpg') }}");
            height: 400px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
          }
        </style>

    </head>
    <body>
        <div class="pl-6 pt-2">
          <a href="{{ route('hoja1') }}" class="underline">Ir a Hoja 1</a>
        </div>
        <p class="pt-2">GRILLAS</p>

        <div class="container">
           <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-4 gap-y-6">
               <div class="bg-blue-100 col-span-2 col-start-2">A</div>
               <div class="bg-blue-200 col-start-1">B</div>
               <div class="bg-blue-300">C</div>
               <div class="bg-blue-400">D</div>
               <div class="bg-blue-500">E</div>
               <div class="bg-blue-600">F</div>
           </div>
        </div> 
        <br>
        <div class="container">
           <div class="grid grid-cols-4 gap-x-4 gap-y-6">
               <div class="bg-red-100 sm:col-span-2 md:col-span-3 lg:col-span-4">A</div>
               <div class="bg-red-200">B</div>
               <div class="bg-red-300">C</div>
               <div class="bg-red-400">D</div>
               <div class="bg-red-500">E</div>
               <div class="bg-red-600">F</div>
           </div> 
        </div>
        <br>
        <div class="container">
           <div class="grid grid-cols-4 gap-x-4 gap-y-6">
               <div class="bg-green-100">A</div>
               <div class="bg-green-200 col-start-4">B</div>
               <div class="bg-green-300">C</div>
               <div class="bg-green-400">D</div>
               <div class="bg-green-500">E</div>
               <div class="bg-green-600">F</div>
           </div> 
        </div>
        <br>
        <div class="container">
           <div class="grid grid-cols-4 grid-rows-2 gap-x-4 gap-y-6">
               <div class="bg-gray-100">A</div>
               <div class="bg-gray-200">B</div>
               <div class="bg-gray-300 col-span-2 row-span-2">C</div>
               <div class="bg-gray-400">D</div>
               <div class="bg-gray-500">E</div>
           </div> 
        </div>
        <br>
        <div class="container">
           <div class="grid grid-cols-4 grid-flow-col grid-rows-3">
               <div class="bg-yellow-100">A</div>
               <div class="bg-yellow-200">B</div>
               <div class="bg-yellow-300">C</div>
               <div class="bg-yellow-400">D</div>
               <div class="bg-yellow-500">E</div>
               <div class="bg-yellow-600">F</div>
               <div class="bg-yellow-700">G</div>
               <div class="bg-yellow-800">H</div>
               <div class="bg-yellow-900">I</div>
           </div> 
        </div>
        <br><br>

        <p>FUENTES</p>
        <div class="container">
          {{-- el h1 que defini en /resources/css/app.css --}}
          <h1>los estilos 'h1', 'p' y 'li' estan definidos en /resources/css/app.css</h1>
          {{-- el h1 que defini, pero modificado --}}
          <h1 class="text-6xl">h1 modificado</h1>

          <p class="font-serif leading-tight ml-5 mb-4">fdj sf oasi d;oahfuh oalisudfg lasdg  eifj fhiauhfiufha iuefh isu jksadbh oig asdf gsdifg asdfg kdf sdifwou eyfpiweufy uiywqoiufey iufhoiwuf wieufh weiuf owefgwhfb wiegf ewiufh wieuf h shfgsdjhg bvv sjbcds akvbasdj vbaskj</p>
          <p class="font-mont leading-tight ml-5 mb-4">fdj sf oasi d;oahfuh oalisudfg lasdg  eifj fhiauhfiufha iuefh isu jksadbh oig asdf gsdifg asdfg kdf sdifwou eyfpiweufy uiywqoiufey iufhoiwuf wieufh weiuf owefgwhfb wiegf ewiufh wieuf h shfgsdjhg bvv sjbcds akvbasdj vbaskj</p>
          <ul>
            <li class="font-mono text-sm italic">Elemento #1</li>
            <li class="font-mono text-sm italic">Elemento #2</li>
            <li class="font-mono text-sm italic">Elemento #3</li>
          </ul>
          <br>
          <!-- lo mismo pero con las clases definidas en resources/css/app.css --->
          <h1>Este es un titulo de prueba</h1>
          <p>fdj sf oasi d;oahfuh oalisudfg lasdg  eifj fhiauhfiufha iuefh isu jksadbh oig asdf gsdifg asdfg kdf sdifwou eyfpiweufy uiywqoiufey iufhoiwuf wieufh weiuf owefgwhfb wiegf ewiufh wieuf h shfgsdjhg bvv sjbcds akvbasdj vbaskj</p>
          <ul>
            <li>Elemento #1</li>
            <li>Elemento #2</li>
            <li>Elemento #3</li>
          </ul>
          <br>

          <p class="font-black tracking-widest">Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Aperiam harum reiciendis quae error velit distinctio nihil quo perferendis laborum nulla? Exercitationem, quaerat asperiores harum quasi cumque ut adipisci facilis voluptatibus?</p>
          <p class="font-thin tracking-tighter">Cumque dolore quia ut accusantium ipsam, at deleniti, voluptate nulla, a quasi possimus. Ipsam, veritatis provident, obcaecati deserunt eum distinctio odit dolor quos quaerat magni quibusdam animi esse, inventore, quam.</p>
          <p class="font-extrabold">Veniam architecto, officiis, reprehenderit, rerum tenetur quisquam quos asperiores atque consequatur, facilis optio impedit blanditiis corporis deserunt magni illo. Deleniti esse exercitationem laboriosam error impedit eaque eveniet pariatur, repudiandae cum.</p>
          <br>

          <h1 class="text-left md:text-center lg:text-right underline uppercase">Titulo de la lista</h1>
          <p class="text-red-700 hover:bg-black hover:text-white hover:opacity-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi dolorem asperiores quam, reprehenderit voluptatibus aut, cum ullam in itaque dolor, vitae? Adipisci expedita suscipit sapiente rerum perferendis tempore nulla repellendus?</p>
          <ul class="list-disc list-inside ml-3">
            <li class="lowercase">minusculas Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, optio. Illum dolor fugit est corrupti reprehenderit, maxime fuga, iste cupiditate adipisci eaque optio facere, ratione accusantium commodi sequi dolorum vero.</li>
            <li class="line-through">tachado Numquam aperiam repudiandae ipsa quaerat voluptate non totam quos dolores. Quae explicabo adipisci facere nam quis vel? Quis tempore aspernatur, sint ratione doloremque voluptate tenetur. Consequatur facere earum, consectetur debitis.</li>
            <li>Dolores est perferendis quia sequi voluptates placeat unde, sit voluptas illum aliquam numquam incidunt dicta ipsum nisi vero distinctio autem nam qui ducimus voluptatibus? Quo corporis consequatur non, optio nisi.</li>
            <li>Odit dolor, fuga. Nemo, aspernatur, mollitia saepe quidem distinctio eligendi error facilis maxime veritatis sint enim, incidunt dolore atque nihil totam harum voluptate consectetur iure, numquam sapiente hic vel ad.</li>
            <li>Atque aliquam necessitatibus fuga, quia officiis accusantium quaerat, itaque aliquid non, accusamus facere, aspernatur quae architecto. Autem vitae itaque, illo sapiente aliquam, neque esse nisi, fugiat quaerat in iusto saepe?</li>
          </ul>
          <br>

          <div class="divide-y-4 divide-gray-400 divide-dashed">
            <p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Alias minima saepe molestiae ullam quod provident ex quo in, laboriosam officiis quos omnis, incidunt eveniet quibusdam mollitia numquam accusamus debitis, optio!</p>
            <p>Accusamus, consequuntur. Ullam sequi assumenda voluptates harum facilis ab dolore consectetur sed quos possimus repellendus nisi excepturi debitis, dignissimos, alias cum saepe quia! Quaerat consectetur hic tempora quod nihil commodi?</p>
            <p>Obcaecati magnam cupiditate dolores aliquid commodi quidem ea dolor praesentium, expedita modi consectetur libero amet, similique, corporis dolore eos atque adipisci voluptate odit recusandae at fugit! Quasi laboriosam numquam aut.</p>
            <p>Officia, velit. Aliquam et, blanditiis! Sint illum possimus repellendus, reiciendis voluptates praesentium est sequi. Natus, incidunt consequuntur, aut ipsum sint eveniet exercitationem sit quidem consequatur deserunt voluptate, et iusto ea!</p>
          </div>

          <p>LINKS</p>
          <nav class="divide-x-2 divide-blue-600">
            <a href="">Link 1</a>
            <a href="">Link 2</a>
            <a href="">Link 3</a>
            <a href="">Link 4</a>
            <a href="">Link 5</a>
          </nav>
          <br>

          <p>MINUSCULAS</p>
          <p class="capitalize">julian andres vitale</p>

        <div>

        <p>IMAGENES</p>
        <div class="container">
          <h1 class="text-3xl text-center font-bold">Titulo</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quo officia ullam consequatur explicabo, doloremque laboriosam laborum cumque soluta possimus sit hic. Ab repellendus provident voluptates est porro iure ratione?</p>
          <div class="grid grid-flow-col auto-cols-max gap-x-6">
            <div class="imagen bg-contain border border-blue-600"></div>
            <div class="imagen bg-contain bg-no-repeat border-8 border-blue-600"></div>
            <div class="imagen bg-cover bg-center border-8 border-blue-600 border-dashed"></div>
            <div class="imagen bg-cover bg-center border-8 border-blue-600 border-dashed bg-clip-padding"></div>
            <div class="imagen bg-cover bg-center border-8 border-blue-600 border-dashed bg-clip-content p-4"></div>

            <div class="imagen bg-fixed bg-cover bg-center"></div>
          </div>
          <div class="grid mt-4 grid-cols-3 gap-x-6 gap-y-6">
            <div class="imagen bg-contain border border-blue-600"></div>
            <div class="imagen bg-contain bg-no-repeat border-8 border-blue-600"></div>
            <div class="imagen bg-cover bg-center border-8 border-blue-600 border-dashed"></div>
            <div class="imagen bg-cover bg-center border-8 border-blue-600 border-dashed bg-clip-padding"></div>
            <div class="imagen bg-cover bg-center border-8 border-blue-600 border-dashed bg-clip-content p-4"></div>

            <div class="imagen bg-fixed bg-cover bg-center"></div>
          </div>
            <p class="pt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat eius, quos officiis nostrum! Dolor consequatur quis saepe adipisci eius alias error in beatae! Nihil, illum, totam expedita sapiente eveniet quam.</p>
            <p>Rem ea laboriosam unde quibusdam? Voluptas, maxime? Recusandae autem nam explicabo molestiae unde porro dolorum magnam voluptate, culpa exercitationem minus excepturi alias quia a id ducimus corporis hic iure tenetur?</p>
            <p>Fuga consequatur aperiam accusantium magni nihil inventore fugiat eius laudantium, ex voluptas. Dolor perspiciatis, optio tenetur similique odio corporis sapiente sed nostrum debitis id deleniti, iusto eveniet nobis mollitia unde.</p>
            <p>Optio maxime sapiente omnis, ipsum cupiditate molestiae quia repudiandae nesciunt corrupti fugit praesentium sunt atque eos consequuntur, incidunt culpa recusandae error perspiciatis iusto. Eveniet iste, praesentium maiores nostrum velit magni.</p>
            <p>Modi ea, cupiditate adipisci sequi. Cumque eius repellat architecto praesentium suscipit quas excepturi, dolorem sapiente reprehenderit quasi natus omnis non at pariatur? Deleniti provident, eligendi, natus saepe minus impedit sunt.</p>
            <p>Nihil non quasi veritatis quam ipsa natus, modi odio consectetur molestias eos voluptatum, iure cum iste ullam dignissimos dolorem aliquid praesentium quisquam facilis error distinctio deserunt. Amet, libero odit facilis!</p>
            <p>Maiores, atque illum magnam exercitationem laborum quo, facere molestias laudantium dolorum quasi architecto! Repellendus perspiciatis aspernatur, praesentium, impedit exercitationem magni cum consequatur qui nostrum corrupti a provident pariatur fugiat. Tenetur.</p>
            <p>Eos architecto ipsum veritatis sed. Recusandae, accusamus. Doloribus et saepe vel maiores sunt tempore voluptatem similique, numquam sint ipsa facere quidem, sed nesciunt laboriosam rerum non ipsum, inventore expedita quod.</p>
            <p>Obcaecati sunt inventore debitis vero architecto eveniet odio. Vel possimus velit accusantium earum numquam necessitatibus nulla quos, autem ut unde tenetur at corrupti quibusdam nostrum. Fugit maxime, voluptate quia quam.</p>
            <p>Aliquam consectetur, vel, ad sequi fugit nihil doloribus quisquam, impedit sapiente sunt nam quae expedita. Exercitationem eum beatae quasi quaerat, soluta, velit tempora consectetur officia repudiandae ex tenetur nemo aspernatur!</p>

        </div>

        <p>COLORES</p>
        <div class="bg-blue-700 h-12 opacity-50"></div>
        <div class="bg-orange-600 h-12"></div>
        <div class="h-12 bg-gradient-to-r from-blue-500 via-green-600 to-yellow-300 text-center font-extrabold text-5xl">
                Hola Mundo
        </div>
        <div class="h-12 bg-gradient-to-r from-blue-500 via-green-600 to-yellow-300 text-center font-extrabold text-5xl bg-clip-text text-transparent">
                Hola Mundo
        </div>


        <p>BORDES y FORMAS</p>
        <div class="container pt-5">
           <div class="grid grid-cols-4 gap-x-4 gap-y-6">
                <div class="w-64 h-64 mx-auto bg-gray-400 border-8 border-blue-700"></div>
                <div class="w-64 h-64 mx-auto bg-gray-400 border-l-8 border-blue-700"></div>
                <div class="w-64 h-64 mx-auto bg-gray-400 border-t-8 border-blue-700"></div>
                <div class="w-64 h-64 mx-auto bg-gray-400 border-r-8 border-blue-700"></div>
           </div>
        <div> 
        <div class="container pt-5">
           <div class="grid grid-cols-4 gap-x-4 gap-y-6">
                <div class="w-64 h-64 mx-auto bg-gray-400 border-8 border-red-700 hover:border-red-200"></div>
                <div class="w-64 h-64 mx-auto bg-gray-400 border-8 border-red-700 hover:border-opacity-50"></div>
                <div class="w-64 h-64 mx-auto bg-gray-400 border-8 border-red-700 rounded-md"></div>
                <div class="w-64 h-64 mx-auto bg-gray-400 border-8 border-red-700 rounded-xl"></div>
           </div>
        <div> 
        <div class="container pt-5">
           <div class="grid grid-cols-4 gap-x-4 gap-y-6">
                <div class="w-32 h-64 mx-auto bg-gray-400 border-8 border-yellow-300 rounded-full"></div>
                <div class="w-64 h-32 mt-16 mx-auto bg-gray-400 border-8 border-yellow-300 rounded-full"></div>
                <div class="w-64 h-64 mx-auto bg-gray-400 border-8 border-yellow-300 rounded-full"></div>
                <div class="w-64 h-64 mx-auto bg-gray-400 border-8 border-yellow-300 rounded-full"></div>
           </div>
        <div> 
        <br><br>


        <p>TABLAS</p>
        <!-- html comment
        <div class="container pl-3">
          <table>
            <thead>
              <tr>
                <th class="border border-gray-400 px-4 py-2 text-blue-900">Pais</th>
                <th class="border border-gray-400 px-4 py-2 text-blue-900">Ciudad</th>
              </tr>
            </thead>

            <tbody>
              <tr class="bg-gray-200">
                <td class="border border-gray-400 px-4 py-2">Peru</td>
                <td class="border border-gray-400 px-4 py-2">Lima</td>
              </tr>
              <tr>
                <td class="border border-gray-400 px-4 py-2">Colombi</td>
                <td class="border border-gray-400 px-4 py-2">Bogota</td>
              </tr>
              <tr class="bg-gray-200">
                <td class="border border-gray-400 px-4 py-2">Argentina</td>
                <td class="border border-gray-400 px-4 py-2">Buenos Aires</td>
              </tr>
            </tbody>

          </table>
        </div>
                -->
        <!-- HAbiendo definido la clase 'table' con todo los estilos en estilos.css, solo queda... -->
        <div class="container pl-3">
          <table class="table w-full border-separate table-fixed">
            <thead>
              <tr>
                <th class="w-1/6">Pais</th>
                <th class="w-1/6">Ciudad</th>
                <th class="w-4/6">Descripcion</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Peru</td>
                <td>Lima</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nisi cumque doloremque, magnam eos? Quia inventore modi earum, laborum ipsum dicta dolore reprehenderit nobis, quibusdam consectetur alias voluptatibus optio voluptatum.</td>
              </tr>
              <tr>
                <td>Colombia</td>
                <td>Bogota</td>
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque nemo voluptates veniam in fugit ullam aliquid obcaecati maxime, quam distinctio dolore quo animi, doloremque et quibusdam deserunt, quae suscipit accusamus!</td>
              </tr>
              <tr>
                <td>Argentina</td>
                <td>Buenos Aires</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, iusto, aliquid. Officia nulla tenetur excepturi ratione. Molestias aperiam earum esse mollitia ex ut cum soluta cumque, ipsum, impedit voluptatem. Corporis.</td>
              </tr>
            </tbody>

          </table>
        </div>
        <br>

        <p>CONTENEDORES</p>
        <div class="container">
          <div class="bg-blue-700 h-52">
            <div class="bg-red-500 h-full w-full  md:w-1/2 lg:w-1/3">
              <div class="bg-yellow-500 h-10 w-full max-w-xs">
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="container">
          <div class="bg-gray-400 w-40 h-screen">
          </div>
          <div class="bg-gray-400 h-24">
          </div>
          <div class="bg-gray-900 h-24 w-screen">
          </div>
        </div>
        <br>

        <p>LAYOUTS</p>
        <div class="container mt-4">
          <div class="grid grid-cols-3 gap-x-4 gap-y-6">
            <div class="bg-gray-300 w-64 h-32 p-8 border-8 border-gray-500">
             <div class="bg-gray-500 w-full h-full"></div>
            </div>
            <div class="bg-gray-300 w-64 h-32 p-8 border-8 border-gray-500 box-content">
              <div class="bg-gray-500 w-full h-full"></div>
             </div>
             <div class="bg-gray-300 w-64 h-32 p-8 border-8 border-gray-500">
              <div class="bg-gray-500 w-full h-full lg:hidden"></div>
             </div>
           </div>
        </div>
        <br>

        <div class="container">
          <img class="float-left" src="https://image.freepik.com/vector-gratis/lindo-pinguino-volando-globos-ilustracion-vectorial-dibujos-animados-vector-aislado-concepto-amor-animal-estilo-dibujos-animados-plana_138676-2016.jpg" alt="">

          <img class="float-right" src="https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?resize=440,330" alt="">
          
          <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit corrupti vel ducimus nam totam sit explicabo quisquam expedita? Distinctio, quibusdam nostrum impedit iure at perspiciatis dolor sint alias recusandae nihil?</p>
          <p class="mb-2 clear-right">Numquam explicabo natus consequatur omnis est provident libero nemo, voluptatum tenetur rerum quas, perferendis eveniet. Molestias earum, quisquam vero vel quaerat fuga beatae veniam praesentium. Perferendis quos quas ab doloremque.</p>
          <p class="mb-2">Mollitia ducimus placeat amet aspernatur rerum, nulla nobis tempora molestias dolorum, dignissimos deleniti harum nihil in odit repudiandae voluptatem error incidunt provident iste at blanditiis sed. Saepe consectetur natus esse!</p>
          <p class="mb-2">Nisi quibusdam facilis recusandae, alias accusamus ratione autem et quod doloremque aperiam voluptas officiis in unde cum inventore eaque voluptatem commodi similique dolor quae repellat accusantium itaque illo! Molestiae, unde.</p>
          <p class="mb-2">Sit fugit necessitatibus vel nisi nemo numquam dolor, eligendi omnis suscipit autem odio perferendis vero sint ea incidunt quod beatae eaque eveniet. Enim minus magnam nemo quod, facilis corrupti dolorum.</p>
          <p class="mb-2">Mollitia ducimus placeat amet aspernatur rerum, nulla nobis tempora molestias dolorum, dignissimos deleniti harum nihil in odit repudiandae voluptatem error incidunt provident iste at blanditiis sed. Saepe consectetur natus esse!</p>
          <p class="mb-2">Nisi quibusdam facilis recusandae, alias accusamus ratione autem et quod doloremque aperiam voluptas officiis in unde cum inventore eaque voluptatem commodi similique dolor quae repellat accusantium itaque illo! Molestiae, unde.</p>
          <p class="mb-2">Sit fugit necessitatibus vel nisi nemo numquam dolor, eligendi omnis suscipit autem odio perferendis vero sint ea incidunt quod beatae eaque eveniet. Enim minus magnam nemo quod, facilis corrupti dolorum.</p>
        </div>

        <div class="container bg-gray-400">
          <img class="mt-1 w-full h-64" src="https://cdn.pixabay.com/photo/2021/02/12/09/36/sunflowers-6007847_960_720.jpg" alt=''>
          <img class="mt-1 w-full h-64 object-contain" src="https://cdn.pixabay.com/photo/2021/02/12/09/36/sunflowers-6007847_960_720.jpg" alt=''>
          <img class="mt-1 w-full h-64 object-cover" src="https://cdn.pixabay.com/photo/2021/02/12/09/36/sunflowers-6007847_960_720.jpg" alt=''>
          <img class="mt-1 w-full h-64 object-cover object-top" src="https://cdn.pixabay.com/photo/2021/02/12/09/36/sunflowers-6007847_960_720.jpg" alt=''>
          <img class="mt-1 w-full h-64 object-none" src="https://cdn.pixabay.com/photo/2021/02/12/09/36/sunflowers-6007847_960_720.jpg" alt=''>
        </div>

        <p class="mt-8">CONTENEDOR DE TEXTO</p>
        <div class="container">
          <div class="mt-2 bg-gray-300 p-4 h-64 overflow-auto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem neque facilis sed libero blanditiis, atque. Aspernatur nostrum illum natus rem mollitia dolor quisquam odit eum saepe at, ratione iure unde.</p>
            <p>Provident perferendis dolore cum, excepturi magni, quas quidem, aliquam perspiciatis tenetur exercitationem sequi eligendi soluta laboriosam cupiditate ratione possimus! Modi, explicabo. Molestias ipsam nostrum, placeat voluptatum ratione, voluptas quod cum.</p>
            <p>Numquam quidem rem corporis sapiente consectetur eligendi voluptate earum ut est tempore quae reprehenderit aliquid dignissimos, aspernatur iusto tenetur, voluptatum magni in voluptas enim consequatur maxime amet, distinctio omnis mollitia!</p>
            <p>Deleniti repudiandae dolorum sint amet neque dolore placeat, recusandae vero, sunt odio voluptatem voluptatibus. Debitis, excepturi culpa cumque, rerum nulla ratione odio ducimus illo? Doloremque ratione exercitationem temporibus ea pariatur?</p>
            <p>Sint quaerat sequi error et, iste, culpa laboriosam ipsam laudantium recusandae laborum vero dicta dolor doloribus magni, quibusdam quo dolorum voluptas dolorem adipisci obcaecati, doloremque nobis repellat commodi? Deserunt, deleniti!</p>
            <p>Quia amet ex autem ratione vitae, consequatur atque tenetur enim modi illo voluptate nesciunt aspernatur cumque, accusantium recusandae in voluptas corrupti magnam id eveniet, nihil! Vero laudantium numquam odio expedita!</p>
            <p>Quisquam numquam consequuntur quia delectus pariatur asperiores distinctio eveniet vitae, nisi tenetur assumenda. Ipsum laboriosam blanditiis eaque doloribus alias eveniet aut sequi sint atque? Magni corrupti vero veritatis voluptate magnam.</p>
            <p>Architecto nemo facilis dicta maxime cum quos distinctio exercitationem odio quasi iusto laudantium similique odit incidunt, iste numquam maiores tempore corrupti excepturi quam, veniam, totam quae! Sit nobis, hic voluptatum.</p>
            <p>Assumenda, suscipit aperiam nesciunt maxime asperiores ad temporibus accusantium minima ipsum placeat dolorum modi veniam aliquam iusto error cumque? Hic, doloribus autem. Consectetur corrupti perspiciatis molestias odit est, aut earum?</p>
            <p>Non dolorem obcaecati nesciunt molestiae expedita aut, vitae laborum ipsa consequuntur cum, distinctio, ratione provident hic a, dignissimos ipsum illo! Labore atque ratione eaque adipisci voluptate fugiat omnis eveniet voluptatum?</p>
          </div>
        </div>

        <p class="mt-8">POSICIONAMIENTO</p>
        <div class="container mt-4">
          <div class="bg-gray-300 p-4">
            <div class="bg-gray-400 p-4">

              <div class="bg-blue-400 p-4">
               </div>
              <div class="bg-blue-600 p-4">
               </div>

            </div>
          </div>
        </div>
        <div class="container mt-4">
          <div class="bg-gray-300 p-4">
            <div class="bg-gray-400 p-4">

              <div class="bg-blue-400 p-4">
              </div>
              <div class="bg-blue-600 p-4 absolute">
              </div>

            </div>
          </div>
        </div>
        <div class="container mt-4">
          <div class="bg-gray-300 p-4 relative">
            <div class="bg-gray-400 p-4">

              <div class="bg-blue-400 p-4">
              </div>
         <!-- <div class="bg-blue-600 p-4 absolute bottom-0 left-0"> -->
         <!-- <div class="bg-blue-600 p-4 absolute inset-y-0 left-0"> -->
         <!-- <div class="bg-blue-600 p-4 absolute inset-x-0 top-0"> -->
         <!-- <div class="bg-blue-600 p-4 absolute inset-x-0 bottom-0"> -->
              <div class="bg-blue-600 p-4 absolute inset-x-0 bottom-0">
              </div>

            </div>
          </div>
        </div>

        <p class="mt-4">FLEXBOX</p>
        <div class="container">
          <div class="bg-gray-300 flex">
            <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
            <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
            <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
          </div>
        </div>
        <div class="container mt-2">
          <div class="bg-gray-300 flex flex-row-reverse">
            <div class="bg-blue-400 text-blue-700 px-4 py-2 m-2">4</div>
            <div class="bg-blue-400 text-blue-700 px-4 py-2 m-2">5</div>
            <div class="bg-blue-400 text-blue-700 px-4 py-2 m-2">6</div>
          </div>
        </div>
        <div class="container mt-2">
          <div class="bg-gray-300 flex justify-end">
            <div class="bg-green-400 text-green-700 px-4 py-2 m-2">7</div>
            <div class="bg-green-400 text-green-700 px-4 py-2 m-2">8</div>
            <div class="bg-green-400 text-green-700 px-4 py-2 m-2">9</div>
          </div>
        </div>
        <div class="container mt-2">
          <div class="bg-gray-300 flex justify-center">
            <div class="bg-yellow-400 text-yellow-700 px-4 py-2 m-2">10</div>
            <div class="bg-yellow-400 text-yellow-700 px-4 py-2 m-2">11</div>
            <div class="bg-yellow-400 text-yellow-700 px-4 py-2 m-2">12</div>
          </div>
        </div>
        <div class="container mt-2">
          <div class="bg-gray-300 flex justify-between">
            <div class="bg-purple-400 text-purple-700 px-4 py-2 m-2">13</div>
            <div class="bg-purple-400 text-purple-700 px-4 py-2 m-2">14</div>
            <div class="bg-purple-400 text-purple-700 px-4 py-2 m-2">15</div>
          </div>
        </div>
        <div class="container mt-2">
          <div class="bg-gray-300 flex justify-around">
            <div class="bg-pink-400 text-pink-700 px-4 py-2 m-2">16</div>
            <div class="bg-pink-400 text-pink-700 px-4 py-2 m-2">17</div>
            <div class="bg-pink-400 text-pink-700 px-4 py-2 m-2">18</div>
          </div>
        </div>
        <div class="container mt-2">
          <div class="bg-gray-300 flex flex-col h-64 justify-end">
            <div class="bg-indigo-400 text-indigo-700 text-center px-4 py-2 m-2">19</div>
            <div class="bg-indigo-400 text-indigo-700 text-center px-4 py-2 m-2">20</div>
            <div class="bg-indigo-400 text-indigo-700 text-center px-4 py-2 m-2">21</div>
          </div>
        </div>

        <div class="container mt-2">
          <div class="bg-gray-300 flex h-44 justify-center">
            <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">22</div>
            <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">23</div>
            <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">24</div>
          </div>
        </div>
        <div class="container mt-2">
          <div class="bg-gray-300 flex h-44 justify-center items-start">
            <div class="bg-blue-400 text-blue-700 px-4 py-2 m-2">25</div>
            <div class="bg-blue-400 text-blue-700 px-4 py-2 m-2">26</div>
            <div class="bg-blue-400 text-blue-700 px-4 py-2 m-2">27</div>
          </div>
        </div>
        <div class="container mt-2">
          <div class="bg-gray-300 flex h-44 justify-center items-end">
            <div class="bg-green-400 text-green-700 px-4 py-2 m-2">28</div>
            <div class="bg-green-400 text-green-700 px-4 py-2 m-2">29</div>
            <div class="bg-green-400 text-green-700 px-4 py-2 m-2">30</div>
          </div>
        </div>
        <div class="container mt-2">
          <div class="bg-gray-300 flex h-44 justify-center items-start">
            <div class="bg-yellow-400 w-64 text-yellow-700 px-4 py-2 m-2 self-stretch">31</div>
            <div class="bg-yellow-400 w-64 text-yellow-700 px-4 py-2 m-2 self-center">32</div>
            <div class="bg-yellow-400 w-64 text-yellow-700 px-4 py-2 m-2 self-end">33</div>
          </div>
        </div>
        <div class="container mt-2">
          <div class="bg-gray-300 flex">
            <div class="bg-purple-400 text-purple-700 px-4 py-2 m-2 flex-1">34</div>
            <div class="bg-purple-400 text-purple-700 px-4 py-2 m-2">35</div>
            <div class="bg-purple-400 text-purple-700 px-4 py-2 m-2">36</div>
          </div>
        </div>
        <div class="container mt-2">
          <div class="bg-gray-300 flex">
            <div class="bg-purple-400 text-purple-700 px-4 py-2 m-2 flex-1">37</div>
            <div class="bg-purple-400 text-purple-700 px-4 py-2 m-2">38</div>
            <div class="bg-purple-400 text-purple-700 px-4 py-2 m-2 flex-1">39</div>
          </div>
        </div>
        <div class="container mt-2">
          <div class="bg-gray-300 flex">
            <div class="bg-pink-400 text-pink-700 px-4 py-2 m-2 flex-1 order-3">40</div>
            <div class="bg-pink-400 text-pink-700 px-4 py-2 m-2 flex-1 order-1">41</div>
            <div class="bg-pink-400 text-pink-700 px-4 py-2 m-2 flex-1 order-2">42</div>
          </div>
        </div>



    </body>
</html>

