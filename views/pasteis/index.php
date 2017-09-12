<h1>Pastéis</h1>
<table border="1">
    <theader>
        <tr>
            <th>Nome</th>
            <th>Recheio</th>
            <th>Valor</th>
        </tr>
    </theader>
    <tbody>
        <?php foreach ($pasteis as $pastel) { ?>
        <tr>
            <td><?php echo $pastel->getNome(); ?></td>
            <td><?php echo $pastel->getRecheio(); ?></td>
            <td><?php echo $pastel->getValor(); ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>