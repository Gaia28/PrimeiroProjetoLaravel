<script src="https://cdn.tailwindcss.com"></script>

<body class="bg-gray-100 min-h-screen flex">

    <!-- Mensagens de Sucesso -->
    @if(session('success'))
        <div class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded shadow-lg" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- Mensagens de Erro -->
   @if(session('erro'))
        <div class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded shadow-lg" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <div class="md:flex w-1/2 flex-col items-center justify-center">
       <h1 class="text-5xl font-extrabold mb-4 text-center text-blue-800">
            Bem-vindo ao <br> Cadastro Empresarial
        </h1>
        <p class="text-lg text-center max-w-md text-blue-500">
            Crie sua conta para acessar o painel e gerenciar seus dados empresariais com facilidade e segurança.
        </p>
    </div>

    <div class="w-full md:w-1/2 flex flex-col items-center justify-center  bg-white shadow-lg">
        
        <h2 class="text-2xl font-bold mb-8 text-center text-gray-800">Informe seus dados</h2>
        
        <form method="POST" action="cadastro-empresa">
            @csrf
            <div class="mb-6">
                 <label for ="name" class="block text-gray-700 text-sm font-bold mb-2">Razão social</label>
                <input type="text" id="razao-social" name="razao-social" required 
                       class="w-500 px-3 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                 <label for ="name" class="block text-gray-700 text-sm font-bold mb-2">CNPJ</label>
                <input type="text" id="cnpj" name="cnpj" required 
                       class="w-120 px-3 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" required 
                       class="w-full px-3 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Senha:</label>
                <input type="password" id="password" name="password" required
                       class="w-full px-3 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" 
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-200">
                Entrar
            </button>
        </form>
    </div>
<script>
    // Fazer as mensagens desaparecerem após 5 segundos
    setTimeout(function() {
        const alerts = document.querySelectorAll('[role="alert"]');
        alerts.forEach(alert => {
            alert.style.opacity = '0';
            alert.style.transition = 'opacity 1s';
            setTimeout(() => alert.remove(), 1000);
        });
    }, 5000);
</script>
</body>