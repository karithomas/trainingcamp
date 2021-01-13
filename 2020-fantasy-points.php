<?php 
$title = '2020 Fantasy Points';
include 'templates/h_open.php'; 
include 'templates/h_close.php';
?>
    <h1>2020 Fantasy Points</h1>
    <table>
        <caption>
            My Top Fantasy Players of 2020
        </caption>
        <thead>
            <tr>
                <th>Rank</th>
                <th>Player</th>
                <th>Position</th>
                <th>Team</th>
                <th>2020 Fantasy Points (PPR)</th>
                <th>2020 Fantasy Points (half-PPR)</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="6">2020 Fantasy Points</td>
            </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>1</td>
            <td>Josh Allen</td>
            <td>QB</td>
            <td>Bills</td>
            <td>406.2</td>
            <td>405.7</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Kyler Murray</td>
            <td>QB</td>
            <td>Cardinals</td>
            <td>390.7</td>
            <td>390.7</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Alvin Kamara</td>
            <td>RB</td>
            <td>Saints</td>
            <td>377.8</td>
            <td>336.3</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Derrick Henry</td>
            <td>RB</td>
            <td>Titans</td>
            <td>337.8</td>
            <td>323.6</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Davante Adams</td>
            <td>WR</td>
            <td>Packers</td>
            <td>358.4</td>
            <td>300.9</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Travis Kelce</td>
            <td>TE</td>
            <td>Chiefs</td>
            <td>312.8</td>
            <td>260.3</td>
          </tr>
        </tbody>
    </table>

<?php include 'templates/aside.php'; ?>
<?php include 'templates/f_open.php'; ?>
<?php include 'templates/f_close.php'; ?>
</body>
</html>