{$smarty["now"]|date_format: "%a %d %b, %Y"}
<br />
<style>
    td {
        padding: 5px 10px;
        background: rgb(248, 251, 252);
    }

    th {
        padding: 5px 10px;
        background: rgb(222, 237, 255);
    }

    table {
        width: 50%;
        text-align: center;
    }
</style>
<table border="1">
    <thead>
        <tr>
            <th>Sr. no.</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        {strip}
            {assign var = count value = 0}
            {foreach $users as $user}
                {assign var = count value = $count+1}
                <tr>
                    <td>{$count}</td>
                    <td>{$user["name"]}</td>
                    <td>{$user["email"]}</td>
                </tr>
            {/foreach}
            {* {section name=index loop=$users}
                <tr>
                    <td>{"index"}</td>
                    <td>{{$users[index]["name"]}}</td>
                    <td>{$users[index]["email"]}</td>
                </tr>
            {/section} *}
        {/strip}
    </tbody>
</table>