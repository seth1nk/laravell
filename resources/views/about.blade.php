<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('О техникуме') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Профессии техникума") }}
                    <style>
   .ramka {
    border: 3px solid #00a8e1;
   }
</style>
                    <pre>
    <pre align="center">Информатики</pre>
<pre>Информатика — это отрасль знаний, которая изучает общие свойства и структуру научной информации, а также закономерности и 
принципы её создания, преобразования, накопления, передачи и использования в различных отраслях человеческой деятельности,
в частности с помощью компьютера.</pre>
<img src="{{ asset('img/program.jpg') }}" alt="Example" width="300" align="center" class="ramka">
<br>
<pre align="center">Нефтяники</pre>
<pre>       Нефтяники — это специалисты, которые занимаются разработкой и добычей нефти и других природных ископаемых. К нефтяникам 
относятся геологи, инженеры, техники и даже водители. Эта профессия требует высшего технического образования или опыта
работы не менее 3 лет по профилю деятельности.</pre>
<img src="{{ asset('img/neft.jpeg') }}" alt="Example" width="250" align="center" class="ramka">
<br>
<pre align="center">Механики</pre>
<pre>Механик — это специалист, который занимается обслуживанием, ремонтом, настройкой и обследованием различных механических 
систем, машин, оборудования и транспортных средств.</pre>
<img src="{{ asset('img/mex.jpg') }}" alt="Example" width="300" align="center" class="ramka">
<br>
<pre align="center">Бухгалтеры</pre>
<pre>Бухгалтер — это специалист, который занимается учётом финансов в организациях. Он ведёт отчётность, рассчитывает зарплаты сотрудников и налоги, взаимодействует с контролирующими органами.</pre>
<img src="{{ asset('img/by.jpg') }}" alt="Example" width="300" align="center" class="ramka">
<br>
<pre align="center">Электрики</pre>
<pre>Электрик — это специалист, который занимается монтажом, наладкой и ремонтом электрооборудования на промышленных предприятиях, в организациях и в жилых домах.</pre>
<img src="{{ asset('img/el.jpeg') }}" alt="Example" width="300" align="center" class="ramka">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
