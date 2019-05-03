<?php
/** Pagina inicial onde vou exibir as consultas para aprovação*/

function ScheduleForm() {
    ?>
    <div class="container">
        <h1>Agendamentos</h1>
        
        <table class="table" id="schedule-table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Especialidade</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        
    </div>
    <?php
}
