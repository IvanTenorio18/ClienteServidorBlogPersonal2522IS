@extends('blog.template.layout')

@section('pestaña')
HOBBIES
@endsection

@section('titulo')
<h1>Hobbies</h1>
<hr>
@endsection

@section('contenido')
    <div class="mb-5">
            <li>
              <a href="#">
                <img src="img/img_1.jpg" alt="">
                <div class="text">
                  <h3>Jugar Fútbol</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="img/img_2.jpg" alt="">
                <div class="text">
                  <h3>Ver Series y Peliculas</h3>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="img/img_3.jpg" alt="">
                <div class="text">
                  <h3>Escuchar Musica</h3>
                </div>
              </a>
            </li>
          </ul>
        </div>
        
      </main>
    </div>
@endsection