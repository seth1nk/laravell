<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Главная') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Ангарский политехнический техникум!") }}
                    <style>
   .ramka {
    border: 3px solid #00a8e1;
   }
</style>
                    <pre align="center">Основные сведения</pre>
                <pre>       Полное наименование: Государственное бюджетное профессиональное образовательное учреждение Иркутской области
«Ангарский политехнический техникум». Сокращенное наименование: ГБПОУ ИО «АПТ». Государственное бюджетное профессиональное
образовательное учреждение Иркутской области «Ангарский политехнический техникум» организовано 1 августа 1947 года</pre>
<br>
<div align="center"><img src="{{ asset('img/222.jpeg') }}" width="50%" class="ramka"></div>
<br>
                <pre align="center">История создания</pre>
<pre>       Техникум организован 1 августа 1947 года в Иркутске на базе авиационного техникума и назывался Иркутским техникумом
исскуственного жидкого топлива и газа (ИЖТ). В 1950 году техникум переводится в Ангарск и арендует помещение школы №2 по 
улице Иркутской, а в 1951 году техникум получает постоянный учебно — лабораторный комплекс. В 1952 году открывается вечернее 
отделение и производится набор первой группы. 10 августа 1957 года техникум переименовывается в Ангарский строительный 
техникум, в него влились Иркутский строительный техникум и Иркутский энергостроительный техникум. 3 октября 1958 года при 
техникуме создается заочное отделение. В связи с широкой подготовкой специалистов различных отраслей народного хозяйства 
1 декабря 1961 года техникум получает статус Ангарского политехнического техникума.</pre>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
