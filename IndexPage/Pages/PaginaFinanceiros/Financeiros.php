<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac - Portal Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Financeiros.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <div class="container">
            <h1 class="mt-4 text-colored">Financeiro</h1>
            <hr class="mb-5">

            <h5 class="mb-3">Exibir curso(s)*</h5>
            <div class="row ms-1">
                <div class="col-1 form-check">
                    <input name="todos" type="radio" class="form-check-input" checked>
                    <label for="" class="form-check-label">Todos</label>
                </div>
                <div class="col-2 form-check">
                    <input name="todos" type="radio" class="form-check-input">
                    <label for="" class="form-check-label">Sou Financiador(a)</label>
                </div>
                <div class="col form-check">
                    <input name="todos" type="radio" class="form-check-input">
                    <label for="" class="form-check-label">Sou Aluno(a)</label>
                </div>
            </div>

            <div class="card mt-4">

                <div class="container text-center ">
                <div class="btn-group w-50 ">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static"
                        aria-expanded="false">
                        Right-aligned but left aligned when large screen
                    </button>
                        
                        <table class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start form-control text-colored">
                        <tr>
                            <th>
                            <span class="ms-3 me-5">
                                    Sintuação
                                </span>
                            </th>
                            <th>
                                <span class="ms-3 me-5">
                                    Financiador
                                </span>
                            </th>
                            <th>
                            <span class="ms-3 me-5">
                                    Vencimento
                                </span>
                            </th>
                            <th>
                            <span class="ms-3 me-5">
                                    Forma de Pagamento
                                </span>
                            </th>
                            <th>
                            <span class="ms-3 me-3">
                                    Parcela
                                </span>
                            </th>
                            <th>
                            <span class="ms-5 ">
                                    Valor
                                </span>
                            </th>
                        </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>