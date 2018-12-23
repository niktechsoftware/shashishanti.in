
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
var activity=new Array();
var weight;
var minutes;

function HowMany(ActivityBurn) {
var burn;
var kilograms;
var weight_entered;
var minutes_entered;

burn_value=ActivityBurn.activity.options[ActivityBurn.activity.selectedIndex].value;
weight_entered=ActivityBurn.curweight.value;
minutes_entered=ActivityBurn.duration.value;

if (burn_value=="" || weight_entered=="" || minutes_entered=="") {
alert("Please enter all required data!");
}
else {

kilograms=curweight/2.2;
hours=duration/60.0;
burn=Math.round(burn_value*kilograms*hours);
 }

ActivityBurn.Fdiff.value = burn;
ActivityBurn.wkg.value = eval(kilograms);
}

function SetWeight(weight) {
curweight = weight.value;
}
function SetDuration(minutes) {
duration = minutes.value;
}

//metric
var mactivity=new Array();
var mweight;
var mminutes;

function MHowMany(MActivityBurn) {
var mburn;
var mkilograms;
var mpounds;
var mweight_entered;
var mminutes_entered;

mburn_value=MActivityBurn.mactivity.options[MActivityBurn.mactivity.selectedIndex].value;
mweight_entered=MActivityBurn.mcurweight.value;
mminutes_entered=MActivityBurn.mduration.value;

if (mburn_value=="" || mweight_entered=="" || mminutes_entered=="") {
alert("Please enter all required data!");
}
else {

mkilograms=mcurweight;
mpounds=mkilograms * 2.2;
mhours=mduration/60.0;
mburn=Math.round(mburn_value*mkilograms*mhours);
 }

MActivityBurn.MFdiff.value = mburn;
MActivityBurn.mpounds.value = eval(mpounds);
}

function MSetWeight(mweight) {
mcurweight = mweight.value;
}
function MSetDuration(mminutes) {
mduration = mminutes.value;
}

// End -->
</SCRIPT>
</head>




<TABLE align="center" CELLPADDING='5'>

<FORM NAME="MActivityBurn">

<TR>
<TD align="center" colspan="2">
Activity
</td>
</tr>
<tr>
<td colspan="2">
<select size="1" name="mactivity">
<OPTION value="">Select Activity
<OPTION value="5">Aerobics low impact
<OPTION value="7">Aerobics high impact
<OPTION value="4">Aerobics water
<OPTION value="7">Aerobics, step low impact
<OPTION value="10">Aerobics, step high impact
<OPTION value="4">Bakery, general
<OPTION value="8">Basketball playing a game
<OPTION value="6.5">Basketball wheelchair
<OPTION value="8.5">Bicycling BMX or mountain
<OPTION value="8">Bicycling 12-13.9 MPH
<OPTION value="10">Bicycling 14-15.9 MPH
<OPTION value="12.0">Bicycling 16-19 MPH
<OPTION value="16.0">Bicycling 20 MPH
<OPTION value="7">Bicycling, stationery moderate
<OPTION value="10.5">Bicycling, stationary vigorous
<OPTION value="3">Bowling
<OPTION value="9">Boxing sparring
<OPTION value="7">Brick laying
<OPTION value="6">Building road
<OPTION value="6">Calisthenics vigorous
<OPTION value="3.5">Carpentry, general
<OPTION value="8">Carrying heavy load
<OPTION selected value="3.5">Child care general
<OPTION value="6">Chopping and splitting wood
<OPTION value="8">Circuit training general
<OPTION value="6">Coal mining, general
<OPTION value="7">Concrete, masonry
<OPTION value="4.5">Construction, inside, remodeling 
<OPTION value="5.5">Construction, outside, remodeling 
<OPTION value="8.5">Cycling BMX or mountain
<OPTION value="8">Cycling 12-13.9 MPH
<OPTION value="10">Cycling 14-15.9 MPH
<OPTION value="12.0">Cycling 16-19 MPH
<OPTION value="16.0">Cycling 20 MPH
<OPTION value="3.5">Electrical work, plumbing
<OPTION value="12">Fire fighter, general
<OPTION value="4">Fishing general
<OPTION value="9">Football competitive
<OPTION value="8">Football touch, flag, general
<OPTION value="8">Forestry, general
<OPTION value="3">Frisbee
<OPTION value="5">Gardening general
<OPTION value="5.5">Golf carrying clubs
<OPTION value="5">Golf pulling cart
<OPTION value="3.5">Golf riding cart
<OPTION value="4">Gymnastics general
<OPTION value="12">Handball general
<OPTION value="6">Hiking cross-country
<OPTION value="4">Horseback riding general
<OPTION value="3.5">House cleaning general
<OPTION value="5">Hunting general
<OPTION value="7">Ice skating general
<OPTION value="4.5">Jog 4 MPH, level
<OPTION value="10">Martial arts general
<OPTION value="7">Masonry, concrete
<OPTION value="6">Mowing lawn walk, hand mower
<OPTION value="4.5">Mowing lawn walk, power mower
<OPTION value="2.5">Mowing lawn riding mower
<OPTION value="6">Pushups, vigorous
<OPTION value="10">Racquetball competitive
<OPTION value="7">Racquetball casual, general
<OPTION value="4">Raking lawn
<OPTION value="11">Rock climbing ascending
<OPTION value="8">Rock climbing rapelling
<OPTION value="7">Rollerblade skating
<OPTION value="8">Rope jumping slow
<OPTION value="10">Rope jumping moderate
<OPTION value="3.5">Rowing, stationary light
<OPTION value="7">Rowing, stationary moderate
<OPTION value="8.5">Rowing, stationary vigorous
<OPTION value="8">Running 5 MPH 12 min/mile
<OPTION value="9">Running 5.2 MPH 11.5 min/mile
<OPTION value="10">Running 6 MPH 10 min/mile
<OPTION value="11">Running 6.7 MPH 9 min/mile
<OPTION value="12.5">Running 7.5 MPH 8 min/mile
<OPTION value="14">Running 8.6 MPH 7 min/mile
<OPTION value="16">Running 10 MPH 6 min/mile
<OPTION value="9">Running cross-country
<OPTION value="8">Running pushing wheelchair
<OPTION value="2.5">Sex, active effort
<OPTION value="1.3">Sex, moderate effort
<OPTION value=".5">Sex, passive effort
<OPTION value="8.5">Shoveling, digging ditches
<OPTION value="6">Shoveling snow by hand
<OPTION value="1.5">Sitting, light office work
<OPTION value="2.5">Sitting moderate mower, forklift
<OPTION value="6">Situps, vigorous
<OPTION value="5">Skateboarding
<OPTION value="8">Skiing cross-country, moderate speed
<OPTION value="6">Skiing downhill, moderate effort
<OPTION value="9.5">Ski machine general
<OPTION value="4.5">Snow blower walking
<OPTION value="8">Snow shoeing
<OPTION value="3.5">Snowmobiling
<OPTION value="5">Softball general play
<OPTION value="2.5">Standing light clerk, filing
<OPTION value="3.5">Standing moderate fast assembly
<OPTION value="10.5">Stationary cycling vigorous
<OPTION value="12.5">Stationary cycling very vigorous
<OPTION value="8">Steel mill, general
<OPTION value="6">Stair step machine, general
<OPTION value="4">Stretching, yoga
<OPTION value="6">Swimming general, leisurely
<OPTION value="10.0">Swimming vigorous laps
<OPTION value="2.5">Tailoring, general
<OPTION value="7">Tennis general
<OPTION value="3.5">Trampoline
<OPTION value="1.5">Typing
<OPTION value="3">Volleyball non-competitive, general play
<OPTION value="4">Volleyball competitive, gymnasium play
<OPTION value="8">Volleyball beach
<OPTION value="4.0">Waiting tables, general
<OPTION value="4">Walk 3.5 MPH, level, brisk pace
<OPTION value="4">Walk 4 MPH, level, very brisk pace
<OPTION value="4.5">Walk 4.5 MPH, level, very, very brisk
<OPTION value="6">Walk / Jog 6MPH alternating
<OPTION value="3.5">Walk pleasure, walking dog
<OPTION value="3.5">Walking 20 Minute Mile Pace
<OPTION value="6">Wakeboarding
<OPTION value="4.5">Wash and wax car
<OPTION value="6">Water skiing
<OPTION value="10">Water Polo
<OPTION value="3">Weight lifting general
<OPTION value="6">Weight lifting vigorous
<OPTION value="7">Wheelchair marathon wheeling
<OPTION value="5">Whitewater rafting, kayaking
</select></td>
</tr>
<tr>
<td>
Workout Duration
</td>
<td>
<INPUT TYPE="text" NAME="mduration" SIZE="6" ONCHANGE="MSetDuration(this)">
Time in Minutes
</td>
</tr>
<tr>
<td>
Your Weight
</td>
<td>
<INPUT TYPE="text" NAME="mcurweight" SIZE="6" ONCHANGE="MSetWeight(this)">
Kilograms</td>
</tr>
</CENTER>
<tr>
<td colspan="2" align="center">
<INPUT TYPE=BUTTON ONCLICK="MHowMany(MActivityBurn)" VALUE="Calculate">&nbsp;&nbsp;&nbsp;
<INPUT TYPE="reset" VALUE="Clear Values">

</TD>
</TR>
<TR>
<TD align="center" colspan="2">
Calculated Results
</td>
</tr>
<tr>
<td>
Calculated Weight 
</td>
<td>
<INPUT TYPE="TEXT" name="mpounds" size="18"> Pounds
</TD>
</TR>
<tr>
<td>
Potential Burn Of
</td>
<td>
<INPUT TYPE=text NAME="MFdiff" VALUE="" SIZE="6"> Calories
</td>
</tr>
</FORM>
</TABLE>


</HTML>
