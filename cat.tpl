{$smarty["now"]|date_format: "%a %d %b, %Y"}

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
            {counter start=0 skip=1}
            {foreach $users as $user}
                <tr>
                    <td>{counter}</td>
                    <td>{$user["name"]}</td>
                    <td>{$user["email"]}</td>
                </tr>
            {/foreach}
        {/strip}
    </tbody>
</table>

{html_table loop=$movies cols=3 table_attr='border="1" style="margin-top: 20px;"'}

{section name=user loop=$users}
    <tr class="{cycle values="odd ,even ,negativ "}">
        <td>hi</td>
    </tr>
{/section}