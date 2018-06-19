<style>
td:not(p) {
  width: 30px;
  height: 30px;
  text-align: center;
  font-family: Arial;
  font-size: 10px;
}
p {
  -webkit-transform: rotate(-90deg);
  transform: rotate(-90deg);
  width: 60px;
}
.bold {
  font-weight: bold;
}
</style>
<table width="100%" border="1" cellspacing="0">
    <tr>
      <td colspan="3">BRAN</td>
      <td></td>
      <td colspan="2">DATE</td>
      <td colspan="3"><?= $from ?></td>
      <td colspan="3">HEURE D'ENVOI :</td>
      <td colspan="6"><?= date("Y-m-d H:i:s") ?></td>
      <td colspan="4">TRANSMIS PAR :</td>
      <td colspan="15"><?= $agent['grade']['diminutif'] . ' ' . $agent['nom'] . ' ' . $agent['prenom'] ?></td>
      <td colspan="2">BRAN</td>
      <td colspan="3">56</td>
    </tr>
    <tr>
      <td rowspan="12"><p><?= $from ?></p></td>
      <td colspan="2">CRENEAU HORAIRE</td>
      <td>18-19</td>
      <td>19-20</td>
      <td>20-21</td>
      <td>21-22</td>
      <td>22-23</td>
      <td>23-00</td>
      <td rowspan="12"><p><?= $middle ?></p></td>
      <td>00-01</td>
      <td>01-02</td>
      <td>02-03</td>
      <td>03-04</td>
      <td>04-05</td>
      <td>05-06</td>
      <td>06-07</td>
      <td>07-08</td>
      <td>08-09</td>
      <td>09-10</td>
      <td>10-11</td>
      <td>11-12</td>
      <td>12-13</td>
      <td>13-14</td>
      <td>14-15</td>
      <td>15-16</td>
      <td>16-17</td>
      <td>17-18</td>
      <td>18-19</td>
      <td>19-20</td>
      <td>20-21</td>
      <td>21-22</td>
      <td>22-23</td>
      <td>23-00</td>
      <td rowspan="12"><p><?= $to ?></p></td>
      <td>00-01</td>
      <td>01-02</td>
      <td>02-03</td>
      <td>03-04</td>
      <td>04-05</td>
      <td>05-06</td>
      <td>06-07</td>
    </tr>
    <tr>
      <td colspan="2">GARDE</td>
      <?php 
        foreach ($effectifs as $keys => $horaire) {
          foreach ($horaire as $key => $value) {
            ?>
            <td><?= $value['garde'] ?></td>
            <?php
          }
        }
      ?>
    </tr>
    <tr>
      <td colspan="2">ASTREINTE</td>
      <?php 
        foreach ($effectifs as $keys => $horaire) {
          foreach ($horaire as $key => $value) {
            ?>
            <td><?= $value['astreinte'] ?></td>
            <?php
          }
        }
      ?>
    </tr>
    <tr>
      <td colspan="2">TOTAL SP</td>
      <?php 
        foreach ($effectifs as $keys => $horaire) {
          foreach ($horaire as $key => $value) {
            ?>
            <td class="bold"><?= $value['total'] ?></td>
            <?php
          }
        }
      ?>
    </tr>
    <tr>
      <td colspan="2">CORRECTION</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="2"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="2">SSSM</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="2">INDISPO</td>
      <td>18-19</td>
      <td>19-20</td>
      <td>20-21</td>
      <td>21-22</td>
      <td>22-23</td>
      <td>23-00</td>
      <td>00-01</td>
      <td>01-02</td>
      <td>02-03</td>
      <td>03-04</td>
      <td>04-05</td>
      <td>05-06</td>
      <td>06-07</td>
      <td>07-08</td>
      <td>08-09</td>
      <td>09-10</td>
      <td>10-11</td>
      <td>11-12</td>
      <td>12-13</td>
      <td>13-14</td>
      <td>14-15</td>
      <td>15-16</td>
      <td>16-17</td>
      <td>17-18</td>
      <td>18-19</td>
      <td>19-20</td>
      <td>20-21</td>
      <td>21-22</td>
      <td>22-23</td>
      <td>23-00</td>
      <td>00-01</td>
      <td>01-02</td>
      <td>02-03</td>
      <td>03-04</td>
      <td>04-05</td>
      <td>05-06</td>
      <td>06-07</td>
    </tr>
    <tr>
      <td colspan="2"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="2"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="2"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td colspan="2"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>