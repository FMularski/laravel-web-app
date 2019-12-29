@extends('layout.base')

@section("title")
  Ranking
@stop

@section("header")
<header>
  <h1 class='alert alert-success'>Ranking języków programowania</h1>
</header>
@stop

@section("appContent")
    <section class="jumbotron">
        <h2>Miejsce 1. JavaScript</h2>
        <p>
            JavaScript to język programowania, który umożliwia wdrożenie na stronie internetowej skomplikowanych elementów, 
            dzięki którym strona ta może nie tylko wyświetlać statyczne informacje, ale również obsługiwać zmianę treść odpowiednio 
            do sytuacji, wyświetlać interaktywne mapy i animacje grafiki 2D/3D , wyświetlać video itd. Jest to trzecia warstwa 
            standardowych technologii internetowych.
        </p>
    </section>

    <section class="jumbotron">
        <h2>Miejsce 2. Java</h2>
        <p>
            Java (wym. dżawa[4]) – współbieżny, oparty na klasach, obiektowy język programowania ogólnego zastosowania[5]. 
            Został stworzony przez grupę roboczą pod kierunkiem Jamesa Goslinga z firmy Sun Microsystems. Java jest językiem
            tworzenia programów źródłowych kompilowanych do kodu bajtowego, czyli postaci wykonywanej przez maszynę wirtualną. 
            Język cechuje się silnym typowaniem. Jego podstawowe koncepcje zostały przejęte z języka Smalltalk (maszyna wirtualna, 
            zarządzanie pamięcią) oraz z języka C++ (duża część składni i słów kluczowych).
        </p>
    </section>

    <section class="jumbotron">
        <h2>Miejsce 3. Python</h2>
        <p>
            Python – język programowania wysokiego poziomu ogólnego przeznaczenia[3], o rozbudowanym pakiecie bibliotek standardowych[4], 
            którego ideą przewodnią jest czytelność i klarowność kodu źródłowego. Jego składnia cechuje się przejrzystością i 
            zwięzłością[5][6].
            Python wspiera różne paradygmaty programowania: obiektowy, imperatywny oraz w mniejszym stopniu funkcyjny. Posiada w 
            pełni dynamiczny system typów i automatyczne zarządzanie pamięcią, będąc w tym podobnym do języków Perl, Ruby, Scheme 
            czy Tcl. Podobnie jak inne języki dynamiczne jest często używany jako język skryptowy. Interpretery Pythona są dostępne 
            na wiele systemów operacyjnych.
            Python rozwijany jest jako projekt Open Source zarządzany przez Python Software Foundation, która jest organizacją non-profit. 
            Standardową implementacją języka jest CPython (napisany w C), ale istnieją też inne, np. Jython (napisany w Javie), CLPython 
            napisany w Common Lisp, IronPython (na platformę .NET) i PyPy (napisany w Pythonie, zob. bootstrap).
        </p>
    </section>

    <section class="jumbotron">
        <h2>Miejsce 4. PHP</h2>
        <p>
            PHP[1] – interpretowany skryptowy język programowania zaprojektowany do generowania stron internetowych i budowania aplikacji webowych[4] w czasie rzeczywistym.
            PHP jest najczęściej stosowany do tworzenia skryptów po stronie serwera WWW, ale może być on również używany do przetwarzania danych 
            z poziomu wiersza poleceń, a nawet do pisania programów pracujących w trybie graficznym (np. za pomocą biblioteki GTK+, używając 
            rozszerzenia PHP-GTK). Implementacja PHP wraz z serwerem WWW Apache oraz serwerem baz danych MySQL określana jest jako platforma AMP 
            (w środowisku Linux – LAMP, w Windows – WAMP).
        </p>
    </section>
@stop