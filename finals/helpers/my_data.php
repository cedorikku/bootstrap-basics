<?php

function randomVerse($current_key)
{
    global $verse_collection;

    $keys = array_keys($verse_collection);
    // Make sure the randomly chosen verse is not the same as the current verse
    // by making a temporary array that excludes the current verse
    $temp_keys = array_diff($keys, array($current_key));

    // Choose a random key from the temporary array    
    $random_key = $temp_keys[array_rand($temp_keys)];

    // Update the current verse
    $_SESSION['currentVerse'] = $random_key;

    // Return the randomly chosen verse
    return $verse_collection[$random_key];
}

$verse_collection = array(
    "John 6:35" => "Then Jesus declared, “I am the bread of life. Whoever comes to me will never go hungry, and whoever believes in me will never be thirsty.",
    "Deuteronomy 31:6" => "Be strong and courageous. Do not be afraid or terrified because of them, for the Lord your God goes with you; he will never leave you nor forsake you.”",
    "Matthew 5:44-47" => "But I tell you, love your enemies and pray for those who persecute you, that you may be children of your Father in heaven. He causes his sun to rise on the evil and the good, and sends rain on the righteous and the unrighteous. If you love those who love you, what reward will you get? Are not even the tax collectors doing that? And if you greet only your own people, what are you doing more than others? Do not even pagans do that?",
    "John 3:16" => "For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life.",
    "John 14:6" => "Jesus answered, “I am the way and the truth and the life. No one comes to the Father except through me.”",
    "John 1:1-5" => "In the beginning was the Word, and the Word was with God, and the Word was God. He was with God in the beginning. Through him all things were made; without him nothing was made that has been made. In him was life, and that life was the light of all mankind. The light shines in the darkness, and the darkness has not overcome it.",
    "Philippians 4:13" => "I can do all things through him who strengthens me.",
    "Luke 6:31" => "Do to others as you would have them do to you.",
    "Romans 8:28" => "And we know that in all things God works for the good of those who love him, who have been called according to his purpose.",
    "Proverbs 3:5-6" => "Trust in the Lord with all your heart and lean not on your own understanding; in all your ways submit to him, and he will make your paths straight.",
    "John 15:4-5" => "Remain in me, as I also remain in you. No branch can bear fruit by itself; it must remain in the vine. Neither can you bear fruit unless you remain in me. I am the vine; you are the branches. If you remain in me and I in you, you will bear much fruit; apart from me you can do nothing.",
    "Romans 12:2" => "Do not conform to the pattern of this world, but be transformed by the renewing of your mind. Then you will be able to test and approve what God’s will is—his good, pleasing and perfect will.",
    "Mark 1:15" => "”The time has come,” he said. “The kingdom of God has come near. Repent and believe the good news!”",
    "Matthew 10:38-39" => "Whoever does not take up their cross and follow me is not worthy of me. Whoever finds their life will lose it, and whoever loses their life for my sake will find it.",
    "Matthew 4:19" => "“Come, follow me,” Jesus said, “and I will send you out to fish for people.”"
);

?>