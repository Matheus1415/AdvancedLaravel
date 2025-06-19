
<x-layout>
    <x-slot name="css">
        <link rel="stylesheet" href="about.css">
    </x-slot>
    <h2>Ola mundo</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quae, eligendi aliquid illo consequatur animi qui perferendis, eos officia consectetur ipsam ut quibusdam soluta dicta repellendus totam ducimus esse corporis.</p>
    {{-- <x-slot name="btn">
        <button>Clique aqui!</button>
    </x-slot> --}}

    <form action="{{ url('/pay') }}" method="POST">
        @csrf
        <input type="text" placeholder="Nome" name="name" value="Matheus">
        <input type="text" placeholder="CVC" name="cvc" value="123">
        <input type="text" placeholder="numero" name="numero    " value="123-0909-090123">
        <button type="submit">ENVIAR</button>
    </form>

</x-layout>
