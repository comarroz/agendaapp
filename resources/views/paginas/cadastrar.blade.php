    <x-layout titulo="Cadastrar">
            <form method="GET">
                @csrf<!-- Libera as portas de Cadastro -->
                <label name="dataCompromisso">Data Compromisso</label>
                <input type="date" name="dataEvento">

                <label name="descricao">Descrição</label>
                <textArea type="text" name="descricaoTexto"></textArea>
                <br><br>


                <button type="submit">salvar</button>
                <a href=""><button>Voltar</button></a>
            </form>
    </x-layout> 