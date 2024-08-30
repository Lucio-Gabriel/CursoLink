<div style="display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; background-color: #7C3BD9;">
    <!-- Logo -->
    <div style="display: flex; align-items: center;">
        <img src="{{ asset('img/logoCursoLink.png') }}" alt="Logo" style="height: 80px; width: 80px; margin-right: 15px;">

    </div>

    <!-- Links da Navbar Centralizados -->
    <div style="display: flex; justify-content: center; flex-grow: 1;">
        <a href="{{ url('/') }}" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 20px; color: white; text-decoration: none; margin: 0 20px;">Início</a>
        <a href="{{ url('/cursos') }}" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 20px; color: white; text-decoration: none; margin: 0 20px;">Cursos</a>
        <a href="{{ url('/sobre') }}" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 20px; color: white; text-decoration: none; margin: 0 20px;">Sobre</a>
        <a href="{{ url('/contatos') }}" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 20px; color: white; text-decoration: none; margin: 0 20px;">Contato</a>
    </div>
</div>
