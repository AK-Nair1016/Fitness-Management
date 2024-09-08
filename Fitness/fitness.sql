create database fitness;
use fitness;

create table wtgain(days varchar(20),body_part varchar(10),exercise varchar(20),sets varchar(20),reps varchar(20));
insert into wtgain values('Monday','chest','Push ups','3','10-12');
insert into wtgain values('Monday','chest','Dumbbell Bench Press','3','10-12');
insert into wtgain values('Monday','chest','Dumbbell Flyes','3','10-12');
insert into wtgain values('Monday','chest','Chest Dips ','3','10-12');

insert into wtgain values('Tuesday','back','Bodyweight Rows ','3','10-12');
insert into wtgain values('Tuesday','back',' Dumbbell Rows ','3','10-12');
insert into wtgain values('Tuesday','back','Lat Pulldowns  ','3','10-12');
insert into wtgain values('Tuesday','back','Deadlifts  ','3','8-10');

insert into wtgain values('Wednesday','Shoulders','Shoulder Press  ','3','10-12');
insert into wtgain values('Wednesday','Shoulders','Lateral Raises  ','3','10-12');
insert into wtgain values('Wednesday','Shoulders','Front Raises  ','3','10-12');
insert into wtgain values('Wednesday','Shoulders','Rear Delt Flyes   ','3','10-12');

insert into wtgain values('Thursday','Legs','Bodyweight Squats  ','3','10-12');
insert into wtgain values('Thursday','Legs','Lunges   ','3','10-12');
insert into wtgain values('Thursday','Legs','Leg Press  ','3','10-12');
insert into wtgain values('Thursday','Legs','Romanian Deadlifts','3','10-12');

insert into wtgain values('Friday','Arms','Bicep Curls ','3','10-12');
insert into wtgain values('Friday','Arms','Tricep Dips  ','3','10-12');
insert into wtgain values('Friday','Arms','Hammer Curls ','3','10-12');
insert into wtgain values('Friday','Arms','Tricep Extensions ','3','10-12');

insert into wtgain values('Saturday','Cores','Planks ','3','30-60 secs');
insert into wtgain values('Saturday','Cores','Russian Twists  ','3','15-20');
insert into wtgain values('Saturday','Cores','Bicycle Crunches ','3','15-20');
insert into wtgain values('Saturday','Cores','Leg Raises ','3','10-12');

create table wtloss(day varchar(20),body_part varchar(30),exercise varchar(40),sets varchar(20),reps varchar(20));

insert into wtloss values('Monday','Push','Push ups','3','8-12');
insert into wtloss values('Monday','Push','Dumbbell Shoulder Press','3','8-12');
insert into wtloss values('Monday','Push','Dumbbell Chest Press','3','8-12');
insert into wtloss values('Monday','Push','Tricep Dips ','3','8-12');
insert into wtloss values('Monday','Push',' Lateral Raises','3','8-12');

insert into wtloss values('Tuesday','Pull',' Pull-ups or Assisted Pull-ups','3','6-10');
insert into wtloss values('Tuesday','Pull','Dumbbell Rows:','3','8-12');
insert into wtloss values('Tuesday','Pull','Lat Pulldowns','3','8-12');
insert into wtloss values('Tuesday','Pull','Barbell or Dumbbell Bicep Curls','3','8-12');
insert into wtloss values('Tuesday','Pull','Face Pulls','3','10-15');

insert into wtloss values('Wednesday','Legs','Bodyweight Squats or Goblet Squats','3','10-15');
insert into wtloss values('Wednesday','Legs','Romanian Deadlifts or Dumbbell Deadlifts','3','8-12');
insert into wtloss values('Wednesday','Legs','Leg press','3','8-12');
insert into wtloss values('Wednesday','Legs','Leg Curls ','3','10-15');
insert into wtloss values('Wednesday','Legs','Calf Raises ','3','15-20');

insert into wtloss values('Thursday','Push','Barbell Bench Press','3','8-12');
insert into wtloss values('Thursday','Push','Seated Dumbbell Chest Press','3','8-12');
insert into wtloss values('Thursday','Push','Incline Dumbbell Chest Press','3','8-12');
insert into wtloss values('Thursday','Push','Tricep Cable Pushdowns','3','10-15');
insert into wtloss values('Thursday','Push','Front Raises','3','10-15');

insert into wtloss values('Friday','Pull','Deadlifts','3','6-10');
insert into wtloss values('Friday','Pull','T-Bar Rows or Cable Rows','3','8-12');
insert into wtloss values('Friday','Pull','Hammer Curls','3','8-12');
insert into wtloss values('Friday','Pull','Reverse Flyes','3','10-15');
insert into wtloss values('Friday','Pull','Preacher Curls','3','8-12');

insert into wtloss values('Saturday','Legs','Front Squats','3','8-12');
insert into wtloss values('Saturday','Legs','Lunges ','3','10-12');
insert into wtloss values('Saturday','Legs','Bulgarian Split Squats','3','8-12');
insert into wtloss values('Saturday','Legs','Romanian Deadlifts with Barbell','3','8-12');
insert into wtloss values('Saturday','Legs','Standing Calf Raises with Barbell','3','15-20');

create table fitness(day varchar(20),body_part varchar(20),exercise varchar(40),sets varchar(20),reps varchar(20));

insert into fitness values('Monday','Full Body Strength ','Bodyweight Squats','3','10-12');
insert into fitness values('Monday','Full Body Strength ','Push-ups ','3','8-10');
insert into fitness values('Monday','Full Body Strength ','Dumbbell Rows ','3','10-12');
insert into fitness values('Monday','Full Body Strength ','Plank','3','30-45 secs');
insert into fitness values('Monday','Full Body Strength ','Dumbbell Lunges','3','10-12');

insert into fitness values('Tuesday','Cardio and Core','Brisk Walking or Jogging','-','20-30mins');
insert into fitness values('Tuesday','Cardio and Core','Bicycle Crunches','3','10-12');
insert into fitness values('Tuesday','Cardio and Core','Russian Twists ','3','10-12');
insert into fitness values('Tuesday','Cardio and Core','Mountain Climbers','3','10-12');
insert into fitness values('Tuesday','Cardio and Core','Leg Raises','3','10-12');

insert into fitness values('Wednesday','Full Body Strength  ','Dumbbell Goblet Squats','3','10-12');
insert into fitness values('Wednesday','Full Body Strength  ','Dumbbell Chest Press ','3','8-10');
insert into fitness values('Wednesday','Full Body Strength  ','Lat Pulldowns ','3','10-12');
insert into fitness values('Wednesday','Full Body Strength  ','Side Plank','3','30-45');
insert into fitness values('Wednesday','Full Body Strength  ','Romanian Deadlifts ','3','10-12');

insert into fitness values('Thursday','Cardio and Core','Jump Rope or Jumping Jacks','2','10mins');
insert into fitness values('Thursday','Cardio and Core','Plank with Shoulder Taps','3','10-12');
insert into fitness values('Thursday','Cardio and Core','Bicycle Crunches','3','10-12');
insert into fitness values('Thursday','Cardio and Core','Russian Twists','3','10-12');
insert into fitness values('Thursday','Cardio and Core','Flutter Kicks','3','10-12');

insert into fitness values('Friday','Lower Body Strength','Squats ','4','6-8');
insert into fitness values('Friday','Lower Body Strength','Deadlifts  ','4','6-8');
insert into fitness values('Friday','Lower Body Strength','. Bulgarian Split Squats ','3','8-10');
insert into fitness values('Friday','Lower Body Strength','Leg Curls  ','3','8-10');
insert into fitness values('Friday','Lower Body Strength','Calf Raises  ','3','8-10');

insert into fitness values('Saturday','Pull Strength ','Weighted Pull-ups','4','6-8');
insert into fitness values('Saturday','Pull Strength ','Barbell Rows','4','6-8');
insert into fitness values('Saturday','Pull Strength ','Face Pulls','3','10-12');
insert into fitness values('Saturday','Pull Strength ','Hammer Curls','3','8-10');
insert into fitness values('Saturday','Pull Strength ','Preacher Curls','3','8-10');

create table diet(day varchar(20),meal varchar(20),food varchar(20));
 
 insert into diet values('Monday','breakfast','Oats Banana Pancakes');
 insert into diet values('Monday','Lunch','Multigrain roti');
 insert into diet values('Monday','Pre-workout','Bananas');
 insert into diet values('Monday','Dinner','Rice peas &paneer');
 
  insert into diet values('Tuesday','breakfast','Oatmeal &  Yogurt ');
 insert into diet values('Tuesday','Lunch','Roti & fish curry');
 insert into diet values('Tuesday','Pre-workout','Toast with Jam');
 insert into diet values('Tuesday','Dinner','Broken wheat khichid');
 
  insert into diet values('Wednesday','breakfast','Poached Eggs');
 insert into diet values('Wednesday','Lunch','Quinoa upma');
 insert into diet values('Wednesday','Pre-workout','Mixed Nuts');
 insert into diet values('Wednesday','Dinner','veg curry &  rice');
 
  insert into diet values('Thursday','breakfast','Oatmeal with Honey');
 insert into diet values('Thursday','Lunch','Grill Chicken Salad');
 insert into diet values('Thursday','Pre-workout','Peanut Butter Toast');
 insert into diet values('Thursday','Dinner','Methi Chicken  Rice');
 
  insert into diet values('Friday','breakfast','Scrambled Egg');
 insert into diet values('Friday','Lunch','Grill chicken rolls');
 insert into diet values('Friday','Pre-workout','Dried Fruits');
 insert into diet values('Friday','Dinner','Chicken Stir Fry');
 
  insert into diet values('Saturday','breakfast','Whole Grain Toast');
 insert into diet values('Saturday','Lunch','Chicken Wrap');
 insert into diet values('Saturday','Pre-workout','Apple');
 insert into diet values('Saturday','Dinner','Keema bhurji & roti');
 
  insert into diet values('Sunday','breakfast','Oatmeal with Nuts');
 insert into diet values('Sunday','Lunch','Pasta with chicken');
 insert into diet values('Sunday','Pre-workout','Granola');
 insert into diet values('Sunday','Dinner','Fish curry & Rice');

create table users(full_name varchar(20), email varchar(50), password varchar(20));
select * from users;
