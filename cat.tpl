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
{* <table>
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

{html_checkboxes options=$userCheckbox name="users" labels=true label_ids=true separator="<br />" } *}


{* Smarty Image  *}
{* {html_image file="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg" href="./"} *}


{* Smarty Select Options *}
{* <select class="form-control" name="users">
    {html_options options=$userCheckbox strict=true }
</select> *}


{* Smarty Radio Group *}
{* {html_radios options=$userCheckbox labels=true label_ids=true strict=true name="UserRadioButton" checked=1} *}


{* Smarty Select Date & Time *}
{* {html_select_date start_year=$smarty.now|date_format:"%Y"-2 end_year=$smarty.now|date_format: "%Y"+ 2 month_format="%B" all_extra='class="form-control"' field_order="DMY" field_separator=" / " month_value_format="%B" all_empty="Please select desired option"} *}
{* {html_select_time use_24_hours=false minute_interval=5 second_interval=5} *}


{* Mtch Equation Custom Function *}
{* {math equation="width / height * 100" width=100 height=200 division=3} *}
{* {'This is the Comment'} *}


{* Text Format Custom Function *}
{* {textformat style="email"}

This is foo.
This is foo.
This is foo.
This is foo.
This is foo.
This is foo.

This is bar.

bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.
bar foo bar foo     foo.
{/textformat} *}


{* INCLUDING CONFIG FILE *}
{* {config_load "./config/colors.conf"}
<div style="background-color: {#bodyBgColor#};color: {#textColor#};">
{#pageTitle#}
</dib> *}


{* DEBUG CONSOLE to show all the variables and values in them snt by php file *}
{* {debug} *}
hi this is ome text in english