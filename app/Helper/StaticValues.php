<?php 
function place_type()
{
    return $a=[
        'Single Room',
        'Entire House',
        'Student housing',
        'Home stay',
        'Help and relief',
        'Bed and breakfast',
    ];
}
function property_type()
{
    return $a=[
        'Town house',
        'Apartment',
        'Villa',
        'Units',
        'Independent house',
        'Pool house',
    ];
}
function your_listing()
{
    return $a=[
        'Spacious room',
        'Private room with bathroom',
        'Private room with shared bathroom',
        'Room in perfect location',
        'Room in a wonderful home',
    ];
}
function Typeofroom()
{
    return $a=[
        'Small',
        'Medium',
        'Large',
    ];
}
function Parking()
{
    return $a=[
        'Available on premises',
        'Off street Parking',
        'No Parking',
    ];
}
function Public_Transport()
{
    return $a=[
        'Bus',
        'Train',
    ];
}
function Internet()
{
    return $a=[
        'Included in rent',
        'Not included in rent',
        'Not Available',
    ];
}
function room_inclusions()
{
    return $a=[
        'Kitchen'=>"<i class='fa fa-flag'></i>",

        'Wi-Fi'=>"<i class='fa fa-flag'></i>",
        
        'Free parking on premise'=>"<i class='fa fa-flag'></i>",

        'Hot tub'=>"<i class='fa fa-flag'></i>",

        'TV'=>"<i class='fa fa-flag'></i>",

        'Gym Area'=>"<i class='fa fa-flag'></i>",

        'Dryer'=>"<i class='fa fa-flag'></i>",

        'Big yard space'=>"<i class='fa fa-flag'></i>",

        'Washing machine'=>"<i class='fa fa-flag'></i>",

        'Microwave'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><rect x="0" y="0" width="48" height="48" fill="none" stroke="none"></rect><g fill="none"><rect width="40" height="30" x="4" y="6" stroke="#fff" stroke-width="4" rx="2"></rect><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M38 15h-4m4 6h-4m-24-6h17v12H10z"></path><circle cx="36" cy="27" r="2" fill="#fff"></circle><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M12 36v6m24-6v6"></path></g></svg>',

        'Air conditioning'=>"<i class='fa fa-flag'></i>",

        'BBQ Area'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none"></rect><g fill="none" stroke="#000000" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.5 14.5L5 22M8 6s1-1.061 1-2c0-1.333-1-2-1-2m4 4s1-1.061 1-2c0-1.333-1-2-1-2m4 4s1-1.061 1-2c0-1.333-1-2-1-2"></path><path stroke-linejoin="round" d="M16.5 17.5h-9"></path><path stroke-linecap="round" stroke-linejoin="round" d="m15.5 14.5l2.1 4.5m.9 3a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3Z"></path><path d="M12 15a7 7 0 0 0 6.975-6.4a.563.563 0 0 0-.575-.6H5.6a.563.563 0 0 0-.575.6A7 7 0 0 0 12 15Z"></path></g></svg>',

        'Balcony/outdoor area'=>"<i class='fa fa-flag'></i>",

        'Heating'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none"></rect><path fill="#000000" d="M19 17c1.21 0 3-.8 3-3s-1.79-3-3-3h-2V9h2c2.2 0 3-1.79 3-3c0-2.2-1.79-3-3-3h-2V2h-1v1H8V2H7v1H2v2h5v2H5c-1.21 0-3 .8-3 3s1.79 3 3 3h2v2H5c-1.21 0-3 .8-3 3s1.79 3 3 3h2v1h1v-1h8v1h1v-1h5v-2h-5v-2h2m0-4c.45 0 1 .19 1 1s-.55 1-1 1h-2v-2h2m-3-2H8V9h8v2m3-6c.45 0 1 .2 1 1c0 .45-.19 1-1 1h-2V5h2M8 5h8v2H8V5m-3 6c-.45 0-1-.19-1-1s.55-1 1-1h2v2H5m3 2h8v2H8v-2m-3 6c-.45 0-1-.19-1-1s.55-1 1-1h2v2H5m11 0H8v-2h8v2Z"></path></svg>',

        'Dining table'=>"<i class='fa fa-flag'></i>",

        'Refrigerator'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><rect x="0" y="0" width="48" height="48" fill="none" stroke="none"></rect><g fill="none" stroke="#000000" stroke-linejoin="round" stroke-width="4"><rect width="28" height="36" x="9" y="4" rx="2"></rect><path stroke-linecap="round" d="M9 22h28M9 20v4m28-4v4m-22 5v4m0-22v4m18 25v4m-20-4v4"></path></g></svg>',
    ];
}

function Bed_size()
{
    return $a=[
        'Single',
        'Double',
        'Queen',
        'King',
        'None',
    ];
}
function Pets_allowed()
{
    return $a=[
        'Yes',
       
        'No',
    ];
}
function Pets_preference()
{
    return $a=[
        'Dogs',
       
        'Cats',
        'Small pets',
        'Birds',
        'Fish',
        'Reptiles',
    ];
}
function Mattress_included_with_bed()
{
    return $a=[
        'Yes',
        'No',
    ];
}
function Bathroom()
{
    return $a=[
        'Shared',
        'Own',
        'Ensuite',
    ];
}
function Room_add_ons()
{
    return $a=[
        'Wardrobe'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#000000" d="M6 2a2 2 0 0 0-2 2v15c0 1.11.89 2 2 2v1h2v-1h8v1h2v-1c1.11 0 2-.89 2-2V4a2 2 0 0 0-2-2H6m0 2h5v15H6V4m7 0h5v15h-5V4m-5 6v3h2v-3H8m6 0v3h2v-3h-2Z"></path></svg>',

        'Single bed'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><rect x="0" y="0" width="48" height="48" fill="none" stroke="none"></rect><g fill="none" stroke="#000000" stroke-linejoin="round" stroke-width="4"><rect width="28" height="36" x="9" y="4" rx="2"></rect><path stroke-linecap="round" d="M9 22h28M9 20v4m28-4v4m-22 5v4m0-22v4m18 25v4m-20-4v4"></path></g></svg>',

        'Study Desk'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#000000" d="M22 5v2h-5l-3.47 5H16v2h-1.54l3.71 8h-2.2l-.93-2H6.38l-1.03 2H3.1l4.13-8H7c-.45 0-.83-.3-.96-.7L2.87 3.84l.95-.34c.52-.16 1.09.13 1.26.65L7.72 12h4.38l3.47-5H12V5h10M9.5 14l-2.08 4h6.69l-1.85-4H9.5Z"></path></svg>',

        'Drawers'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 14H3m0-6h18m-10 9h2m-2-6h2m-2-6h2m8-2.4v16.8a.6.6 0 0 1-.6.6H3.6a.6.6 0 0 1-.6-.6V2.6a.6.6 0 0 1 .6-.6h16.8a.6.6 0 0 1 .6.6ZM17.5 20v2m-11-2v2"></path></svg>',

        'Chair'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#000000" d="M22 10v3h-3v-3h3M2 13h3v-3H2v3m15-8c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v8h10V5M7 15H6v2h5v1l-4 4h2.8l2.2-2.2l2.2 2.2H17l-4-4v-1h5v-2H7Z"></path></svg>',
    ];
}
function Bills_are()
{
    return $a=[
        'Included in rent',
        'Not Included in rent'
    ];
}
function Minimum_rental_period()
{
    return $a=[
        'No minimum stay',
        '1 Week',
        '2 weeks',
        '1 month',
        '2 months',
        '3 months',
        '4 months',
        '6 months',
        '9 months',
        '12 months+',
    ];
}
function Maximum_rental_period()
{
    return $a=[
        'No Maximum stay',
        '1 Week',
        '2 weeks',
        '1 month',
        '2 months',
        '3 months',
        '4 months',
        '6 months',
        '9 months',
        '12 months+',
    ];
}
function Roommate_preference()
{
    return $a=[
        'Anyone',
        'No couples',
        'Couple',
        'Women only',
        'Men only',
        'LGBTQI only',
    ];
}

function Accommodation_suitable()
{
    return $a=[
        'Children'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#000000" d="M6 2a2 2 0 0 0-2 2v15c0 1.11.89 2 2 2v1h2v-1h8v1h2v-1c1.11 0 2-.89 2-2V4a2 2 0 0 0-2-2H6m0 2h5v15H6V4m7 0h5v15h-5V4m-5 6v3h2v-3H8m6 0v3h2v-3h-2Z"></path></svg>',

        'Students'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><rect x="0" y="0" width="48" height="48" fill="none" stroke="none"></rect><g fill="none" stroke="#000000" stroke-linejoin="round" stroke-width="4"><rect width="28" height="36" x="9" y="4" rx="2"></rect><path stroke-linecap="round" d="M9 22h28M9 20v4m28-4v4m-22 5v4m0-22v4m18 25v4m-20-4v4"></path></g></svg>',

        'Smokers'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#000000" d="M22 5v2h-5l-3.47 5H16v2h-1.54l3.71 8h-2.2l-.93-2H6.38l-1.03 2H3.1l4.13-8H7c-.45 0-.83-.3-.96-.7L2.87 3.84l.95-.34c.52-.16 1.09.13 1.26.65L7.72 12h4.38l3.47-5H12V5h10M9.5 14l-2.08 4h6.69l-1.85-4H9.5Z"></path></svg>',

        'Retirees'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 14H3m0-6h18m-10 9h2m-2-6h2m-2-6h2m8-2.4v16.8a.6.6 0 0 1-.6.6H3.6a.6.6 0 0 1-.6-.6V2.6a.6.6 0 0 1 .6-.6h16.8a.6.6 0 0 1 .6.6ZM17.5 20v2m-11-2v2"></path></svg>',

        'Professionals'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#000000" d="M22 10v3h-3v-3h3M2 13h3v-3H2v3m15-8c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v8h10V5M7 15H6v2h5v1l-4 4h2.8l2.2-2.2l2.2 2.2H17l-4-4v-1h5v-2H7Z"></path></svg>',

        'Backpacker'=>'<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#000000" d="M22 10v3h-3v-3h3M2 13h3v-3H2v3m15-8c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v8h10V5M7 15H6v2h5v1l-4 4h2.8l2.2-2.2l2.2 2.2H17l-4-4v-1h5v-2H7Z"></path></svg>',
    ];
}