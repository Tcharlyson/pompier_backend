<style>
@page {
  size: auto;   /* auto is the initial value */
  margin: 0;  /* this affects the margin in the printer settings */
}

@media print and (color) {
  * {
    -webkit-print-color-adjust: exact; 
    print-color-adjust: exact;
  }
  
  .yellow {
    background-color: yellow;
  }
  .purple {
    background-color: purple;
  }
  .blue {
    background-color: blue;
  }
}
td {
  font-size: 13px;
  font-family: Comic Sans MS;
  text-align: center;
  border-left: 1px solid black;
  border-top: 1px solid black;

  font-weight: bold;
}
td:last-child {
  border-right: 1px solid black;
}
tr:last-child td {
  border-bottom: 1px solid black;
}
.color-fill {
  width:20px;
}
.hide-display {
  visibility: hidden;
}
.hack-border {
  border-right: 1px solid black;
}
.yellow {
  background-color: yellow;
}
.purple {
  background-color: purple;
}
.blue {
  background-color: blue;
}
</style>
<table width="100%" cellspacing="0">
    <tr>
      <td class="hide-display"></td>
      <td class="hide-display" colspan="1" bgcolor="red"></td>
      <td colspan="2" class="hack-border">Equipe : <?= $equipe ?></td>
      <td class="hide-display" colspan="2"></td>
      <td colspan="6">Jour : <?= $from ?></td>
      <td colspan="18">Jour : <?= $to ?></td>
    <tr>
      <td class="hide-display"></td>
      <td class="hide-display" colspan="1" bgcolor="red"></td>
      <td colspan="1" >Grade</td>
      <td colspan="1">Nom</td>
      <td colspan="1">Permis</td>
      <td colspan="1">Spé</td>
      <td colspan="6">18h - 00h</td>
      <td colspan="18">00h - 18h</td>
    </tr>
    <?php foreach ($agentsHoraires as $key => $value) { ?>
      <tr>
        <td><?= $value['equipe']['diminutif'] ?></td>
        <td><?= $value['uv']['diminutif'] ?></td>
        <td><?= $value['grade']['diminutif'] ?></td>
        <td><?= $value['nom'] . ' ' . $value['prenom'] . '.' ?></td>
        <td><?= $value['conduite'] ?></td>
        <td><?= $value['specialite'] ?></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 18, intval($equipe), intval($value['id_equipe']), $from, $from, $to) ?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 19, intval($equipe), intval($value['id_equipe']), $from, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 20, intval($equipe), intval($value['id_equipe']), $from, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 21, intval($equipe), intval($value['id_equipe']), $from, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 22, intval($equipe), intval($value['id_equipe']), $from, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 23, intval($equipe), intval($value['id_equipe']), $from, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 0, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 1, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 2, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 3, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 4, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 5, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 6, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 7, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 8, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 9, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 10, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 11, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 12, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 13, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 14, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 15, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 16, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
        <td class="color-fill <?= Helpers::fillColorFromDatabase($value['horaireAgents'], 17, intval($equipe), intval($value['id_equipe']), $to, $from, $to)?>"></td>
      </tr>
    <?php } ?>
  </table>