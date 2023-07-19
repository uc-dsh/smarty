{* SMARTY DATE FUNCTIONS *}
{* {$smarty["now"]|date_format: "%a %d %b, %Y"} *}


{* foreach loop with associative array *}
{* <table border="1">
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
            {assign var="count" value=0}
            {foreach $users as $user}
                <tr>
                    <td>{$smarty.server.SERVER_NAME|capitalize}</td>
                    <td>{$user["name"]}</td>
                    <td>{$user["email"]}</td>
                </tr>
            {/foreach}
        {/strip}
    </tbody>
</table> *}


{* custom table function *}
{* {html_table loop=$movies cols=3 table_attr='border="1" style="margin-top: 20px;"'} *}


{* section function *}
{* <table>
    {section name=user loop=$users}
        <tr class="{cycle values="odd ,even ,negativ "}">
            <td>{$users[user]["name"]}</td>
            <td>{$users[user]["dob"]}</td>
            <td>{$users[user]["email"]}</td>
        </tr>
    {/section}
</table> *}


{* custom checkbox function *}
{* {strip}
    {html_checkboxes options=array(1=>"One" ,2=> "Two",3=>"Three",4=> "Four") outputs="One" labels=TRUE label_ids=TRUE separator="<br />"}
{/strip} *}


{* Using loop over Data selected from Database *}
<table>
    <thead>
        <tr>
            <th>User Name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        {foreach $DbUsers as $User}
            <tr>
                <td>{$User["username"]}</td>
                <td>{$User["email"]}</td>
                <td>{$User["age"]} y.</td>
            </tr>
        {/foreach}
    </tbody>
</table>



{html_checkboxes options=$userCheckbox name="users" labels=true label_ids=true separator="<br />" attr}