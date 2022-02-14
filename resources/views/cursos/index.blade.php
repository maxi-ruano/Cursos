@extends('layouts.plantilla')

@section('title','cursos')
<div class='cursos-contenedor'>
@section('content')
{{-- <section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">COURSES</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">PHP</h3>
                    <p class="text-muted mb-0">A server-side language is one that runs on the web server, just before the page is sent over the Internet to the client. Pages running on the server can perform database accesses, network connections, and other tasks to create the final page that the client will see. </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">LARAVEL</h3>
                    <p class="text-muted mb-0">aravel is a popular PHP framework. It allows the development of fully customized web applications of high quality.

                        Laravel emphasizes code quality, ease of maintenance and scalability, allowing projects to be carried out from small to large or very large.It also allows and facilitates teamwork and promotes best practices.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">MYQSL</h3>
                    <p class="text-muted mb-0">MySQL is a free database engine, open to anyone who wants to make use of it. It is open source, and is developed and backed by the company Oracle.
                        It works within the client-server model. That is, the service is permanently available to be consulted and deliver data to the client, both in the form of a web page processed through PHP, and directly when making a query from the SQL command line.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">BOOTSTRAP</h3>
                    <p class="text-muted mb-0">Bootstrap is one of the best known and most widely used open source CSS frameworks in the world of web development.

                        This framework greatly facilitates the layout of web pages, since it allows you to create a very clean and completely responsive interface, that is, adaptable to any screen size. In addition, it offers so many tools and functionalities that it allows you to create a website from scratch very easily.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">LINUX</h3>
                    <p class="text-muted mb-0">Linux is a free open source operating system that is released under the GNU General Public License (GPL). Anyone can execute, study, modify or redistribute the source code, and even market copies of their modified code, as long as they do so subject to the same license.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">JAVASCRIPT</h3>
                    <p class="text-muted mb-0">JavaScript is a high-level, dynamic and interpreted language. It is defined as object-oriented, prototype-based, imperative and weakly typed. Along with HTML and CSS, it is one of the three essential technologies in the world's web production: most websites use it and it is compatible with all modern browsers without the need for plug-ins. JavaScript has an API to work with text, arrays, dates and regular expressions.

                        </p>
                </div>
            </div>
        </div>
    </div>
</section> --}}


{{--     
<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-4 col-sm-6">
                <a class href="cursos/create" >
                    <img class="img-fluid"  src="/assets/img/php2.png" alt="..." />
                   
                        
                        
                  
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class  href="cursos/create">
                    <img class="img-fluid" src="/assets/img/laravel.png" alt="..." />
                   
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class  href="cursos/create">
                    <img class="img-fluid" src="/assets/img/mysql.png" alt="..." />
                    
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="/assets/img/bootstrap.png" title="Project Name">
                    <img class="img-fluid" src="/assets/img/bootstrap.png" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="/assets/img/linux.jpg" title="Project Name">
                    <img class="img-fluid" src="/assets/img/linux.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="/assets/img/javascript.png" title="Project Name">
                    <img class="img-fluid" src="/assets/img/javascript.png" alt="..." />
                    <div class="portfolio-box-caption p-3">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div> --}}

<div class='content-index'>


<br><br>

<div class="col-lg-3 col-md-6 text-center">
    <div class="mt-5">
       
    
<ul>
    @foreach ($cursos as $curso)
    
    <li>
        <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i>
    <a class="text-muted mb-0" href="{{route('cursos.show',$curso->id)}}">{{ $curso->name}}
    </div>
    </a>
    
    
    </li>        
    @endforeach
</ul>
<div class='links'>
{{$cursos->links()}}
</div>
<a class="btn btn-primary" href="cursos/create" role="button">COURSE CREATE</a>

    </div>
</div>
</div>





@endsection
</div>
</div>

{{-- <div class="col-lg-3 col-md-6 text-center">
    <div class="mt-5">
        <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
        <h3 class="h4 mb-2">BOOTSTRAP</h3>
        <p class="text-muted mb-0">Bootstrap is one of the best known and most widely used open source CSS frameworks in the world of web development.

            This framework greatly facilitates the layout of web pages, since it allows you to create a very clean and completely responsive interface, that is, adaptable to any screen size. In addition, it offers so many tools and functionalities that it allows you to create a website from scratch very easily.</p>
    </div> --}}