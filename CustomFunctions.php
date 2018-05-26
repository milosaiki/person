<?php

class CustomFunction 
{

  public static function introduce($Object) {
    $introduce = self::isAdult($Object) ? $introduce = self::adultIntroduction($Object) : self::childIntroduction($Object);

    echo '<p>Hello,<br> my name is ' . $Object->getFirstName() . ' ' . $Object->getLastName() . ' and I\'m ' . $Object->getAge() . ' years old.<br>I live in ' . $Object->getCity() . ', ' . $Object->getState() . ', ' . $Object->getAddress() . '. <br> ' . $introduce . '</p><br>';
  }

  public static function wakeUp($Object)
  {
    $message = 'Wake up ' . $Object->getFirstName();
    if (self::isAdult($Object)) {
      $message .= ', time to go to work.';
    } else {
      $message .= ', time for school.';
    }

    echo $message .= ' If you are awake, have a nice day :)<br>';
  }

  public static function goToSleep()
  {
    echo 'Time to go to sleep. Sweet dreams<br>';
  }

  public static function eat()
  {
    echo 'Time to have a nice meal<br>';
  }

  public static function getOut() 
  {
    echo 'Time to get out. Go and get some fun<br>';
  }

  private static function isAdult($Object) 
  {
    return $Object instanceof Adult ? true : false;
  }

  private static function adultIntroduction($Object)
  {
    $work = $Object->getWork() != '' ? 'I work as a ' . $Object->getWork() : 'Currently, I am unemplyed';
    $kids = $Object->getKids() != 0 ? ' and I have ' . $Object->getKids() . 'kid(s)' : '';
    $education  = $Object->getEducation();
    $marrigeStatus = '';
    if ($Object->getMarrigeStatus() == 'married') {
      $marrigeStatus = 'I am happly married ' . $kids;
    } else if ($Object->getMarrigeStatus() == 'in relationship') {
      $marrigeStatus = 'I am in relationship';
    }

    return $work . '. <br> I went to ' . $education . ' college. ' . $marrigeStatus;
  }

  private static function childIntroduction($Object)
  {
    return 'I am going to ' . $Object->getSchool() . ' school. My best friend is ' . $Object->getFavoriteFriend() . ' and together we like to play ' . $Object->getFavoriteGame();
  }
}