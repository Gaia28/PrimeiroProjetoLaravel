<script src="https://cdn.tailwindcss.com"></script>

<body class="bg-gray-100 min-h-screen flex ">

    <div class="md:flex w-1/2 flex-col items-center justify-center" >
        <h1 class="text-5xl font-extrabold mb-4 text-center text-blue-700">Seja Bem-vindo</h1>
        <p class="text-lg text-center max-w-md text-blue-500">
            Acesse sua conta para gerenciar suas informações empresariais de forma rápida e segura.
        </p>
    </div>

    <div class="w-full md:w-1/2 flex flex-col items-center justify-center bg-white shadow-lg">
        <h2 class="text-2xl font-bold mb-8 text-center">Login</h2>

        <form method="POST" action="validar-login">
            @csrf
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">E-mail</label>
                <input class="w-64 p-2 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                type="email" required id="email" name="email" placeholder="Digite seu email">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Senha</label>
                <input class="w-64 px-2 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                 type="password" required id="password" name="password" placeholder="Digite sua senha">
            </div>
            <button type="submit" 
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-200">
                Entrar
            </button>

            <a class="text-sm text-blue-500 hover:underline mt-4 block text-center" 
            href="cadastre-sua-empresa">Cadastrar minha empresa</a>

        </form>
    </div>





</body>