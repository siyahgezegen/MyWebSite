<h3 class="h3 text-center">Yapılan Projeler</h3>
<div class="container overflow-auto" style="height: 30rem;" >

    <table class="table" style=" min-width: 31rem">
        <thead>
            <tr>
                <th style="width: 5%" scope="col">Proje Adı</th>
                <th style="width: 80%" scope="col">Proje Açıklaması</th>
                <th style="width: 5%" scope="col">Github</th>
                <th style="width: 10%" scope="col">Tarih</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->PROJECT_NAME }}</td>
                    <td>{{ $project->PROJECT_EXPLANATION }}</td>
                    <td>
                        <?php
                            $link = $project->PROJECT_GITHUB_LINK;
                            if ($link == 'null' || $link ==null) {
                                echo "<span style='color: red'>Proje Linki Bulunamadı</span>";
                            }
                            else {
                                ?>
                        <a href="{{ $project->PROJECT_GITHUB_LINK }}"><img src="{{ asset('images/github-mark.svg') }}"
                                width="32px" alt=""></a>

                        <?php } ?>

                    </td>

                    </td>
                    <td>{{ $project->created_at }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

</div>
