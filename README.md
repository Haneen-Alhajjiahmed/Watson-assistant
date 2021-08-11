# Watson-assistant
In this project, we introduce IBM Watson™ Assistant and walk you through the process of creating your first assistant.

## Pre-requisties 
1. Go to the Watson Assistant page in the IBM Cloud® catalog.
2. Sign up for a free IBM Cloud account or log in.
3. Click Create.

## Create the assistant 
1. Click the Assistants icon, and then click Create assistant.
<img width="586" alt="Screen Shot 2021-08-08 at 9 00 04 PM" src="https://user-images.githubusercontent.com/85841915/128697544-0ea9b0a9-8731-4e3c-b39c-86c622cf6797.png">
3. Name it, you can change it later.
<img width="497" alt="Screen Shot 2021-08-08 at 9 00 12 PM" src="https://user-images.githubusercontent.com/85841915/128697561-481f4d43-9c89-4d22-b10a-a0c3c37a7c2d.png">
5. Click create

## Create a dialog skill
A dialog skill is a container for the artifacts that define the flow of a conversation that your assistant can have with your customers.
1. Click Add an actions or dialog skill.
2. Give your skill a name.
3. Choose dialog from the skill type.
4. Click Create skill.
<img width="647" alt="Screen Shot 2021-08-09 at 2 12 23 PM" src="https://user-images.githubusercontent.com/85841915/128697880-1cb86d4f-673c-4bc1-b434-4c72771cfa91.png">

## Upload assistant tools 
These tools contains the most common comments used by the customers such as general greeting comments.
From Cntent Catalog tab select one or more of the listed intents. By clicking on add to skill.
<img width="1280" alt="Screen Shot 2021-08-09 at 2 24 21 PM" src="https://user-images.githubusercontent.com/85841915/128699288-e034385b-a70b-4a5a-a9a4-e915f20b3452.png">

## Plan the dialog
You are building an assistant for a Robot Control User Interface. You want the simple assistant to answer user questions about the user interface, its purpose, and why it was built. Therefore, you need to create intents that handle inquiries related to the following subjects:

User Interface information
✅Compitition details
✅User Interface components

You'll start by creating intents that represent these subjects, and then build a dialog that responds to user questions about them.

# Note: I will use out of context example to demonstrate the steps of creating intents, entities, and test them. This project was implement it with the same approaches. 

## Create intents
In this project i needed two intents. That recognize the user's intent to ask about the compitition. And the website components which are controlling the rotation degree and the base movement. The general process of creating an intent is:
1. From the Intents tab, click Create intent.
<img width="1264" alt="Screen Shot 2021-08-09 at 2 41 30 PM" src="https://user-images.githubusercontent.com/85841915/128701137-916be7f5-a27b-4a00-826c-f4788826e2d7.png">
3. Enter the Intent name, and then click Create intent.
4. Add the user examples that help the assistant to have an idea about the user intents when asking such a question. an example, when user type "hi", the user's intent is to greet the assistant. 
<img width="1223" alt="Screen Shot 2021-08-09 at 2 43 43 PM" src="https://user-images.githubusercontent.com/85841915/128701169-9822f74f-4aba-4ac3-be90-01fcfedb36ea.png">
6. Click the Close <- icon to finish adding the intent.

## Add a dialog node that is triggered by the created intent
Add a dialog node that recognizes when the user input maps to the intent that you created in the previous step, meaning its condition checks whether your assistant recognized the created intent from the user input. The genreal steps are:
1. Click the Dialog tab.
2. Find the Welcome node in the dialog tree.
3. Click the More icon<img width="31" alt="Screen Shot 2021-08-09 at 3 31 07 PM" src="https://user-images.githubusercontent.com/85841915/128706512-86d77df2-4fcd-4180-b705-7eee142c2bb2.png">
 on the Welcome node, and then select Add node below.
 <img width="906" alt="Screen Shot 2021-08-09 at 3 30 56 PM" src="https://user-images.githubusercontent.com/85841915/128706610-ba9cd89a-5d90-4895-a1da-c7fd5332ae69.png">
 4. In the picture below, you have a few fields to fill based on your desire. The name of the node is optinal but it is a good practice. 
 5. "If assistant recognizes" field choose intent and select one of the listed intents in our example is (covid-19).
 6. "Assistant responds" field is to choose the appropreate answer to that intent. You can choose different response tupes (text, image, options, ...). and you can add more than one respond to that intent. 
 <img width="906" alt="Screen Shot 2021-08-09 at 3 30 56 PM" src="https://user-images.githubusercontent.com/85841915/128707578-b935a601-04e0-4fd7-98fa-5b2ef3283761.png">

## Test the #Covid-19 dialog node
1. Click the Try it <img width="150" alt="Screen Shot 2021-08-09 at 3 51 44 PM" src="https://user-images.githubusercontent.com/85841915/128709023-05373b51-bae3-40ac-86af-74cdde75b589.png">
icon to open the "Try it out" pane.
2. Enter, I want to learn more about the pandamic.
<img width="370" alt="Screen Shot 2021-08-09 at 3 53 57 PM" src="https://user-images.githubusercontent.com/85841915/128709302-bf4d14ae-393a-42e7-af96-fdbf4ec090ba.png">

Note: You may need to train Watson on more than 5 examples to gain a better assistant expierience.

## Create an Entity
An entity is a thing that has multiple attributes to describe it. WhenWhen taking a shape, we need to describe its color, geometry, and dimensions. TheThe entity here is the shape. Color, geometry, and size are attributes of the shape. ForIn this example, I will use covid-19 as the entity and vaccine as its attribute. 
1. Click the Entities tab.
2. Click Create entity.
<img width="1279" alt="Screen Shot 2021-08-09 at 4 06 31 PM" src="https://user-images.githubusercontent.com/85841915/128711868-450a312a-9492-4d9c-a262-47615e0ea0c0.png">
4. Enter the entity name.
5. Click Create entity.
6. Add s Value to the name field, and then press Enter.
7. You can add additional synonym.
8. Click Add value.
<img width="1262" alt="Screen Shot 2021-08-09 at 4 08 24 PM" src="https://user-images.githubusercontent.com/85841915/128711916-c3e10ab7-2f36-4063-a69c-1e5a65c94e08.png">

## Add child nodes that are triggered by the @covid-19 entity types
Note: you can diffrentiate between the entity and the intent by the symbols. The intent uses hash symbol #. The entity uses at symbol @.
1. Click the Dialog tab.
2. Find the #covid-19 node in the dialog tree.
3. Click the More <img width="31" alt="Screen Shot 2021-08-09 at 3 31 07 PM" src="https://user-images.githubusercontent.com/85841915/128741426-b6812906-2d1b-496e-ac92-959429b1d609.png"> icon on the #covid-19 node, and then select Add child node.
4. Name the node.
5. In "If assistant recognizes" field, choose entity then @covid-19.
6. Create the appropriate respond.
<img width="1280" alt="Screen Shot 2021-08-09 at 7 41 30 PM" src="https://user-images.githubusercontent.com/85841915/128742398-738e400d-5b48-4370-a615-b3a0b4287a75.png">
<img width="361" alt="Screen Shot 2021-08-09 at 7 43 45 PM" src="https://user-images.githubusercontent.com/85841915/128742704-cb003a32-4914-4981-81ae-caa3645201f2.png">

# Usage
## Integrate Watson assistant into your web page
1. Click Assistants icon <img width="41" alt="Screen Shot 2021-08-09 at 7 46 06 PM" src="https://user-images.githubusercontent.com/85841915/128743086-9173e108-cf44-4c50-861c-0bf20ebf539a.png">
2. Click this option 
<img width="337" alt="Screen Shot 2021-08-09 at 7 46 21 PM" src="https://user-images.githubusercontent.com/85841915/128743116-5bce6155-3be5-4d9e-8d34-de047f001ce7.png">
3. Click create
4. You can manipulate the chat settings and appearance, then click save
<img width="1280" alt="Screen Shot 2021-08-09 at 7 48 39 PM" src="https://user-images.githubusercontent.com/85841915/128743750-9492cd62-d479-4d27-bd20-52436d43ae1e.png">
6. Click the Embed tap and copy the script
7. Attach it to your HTML code in the body tag
<img width="1280" alt="Screen Shot 2021-08-09 at 7 48 55 PM" src="https://user-images.githubusercontent.com/85841915/128743774-d12a325b-8650-4491-8923-3a85a52a3ab8.png">

# Project output
The interface has the conversation icon in the lower right corner:
<img width="1280" alt="Screen Shot 2021-08-11 at 1 57 07 PM" src="https://user-images.githubusercontent.com/85841915/129017971-e43f4566-7d16-4409-8859-3ec3bdcf6570.png">
When clicking the conversation icon:
<img width="1280" alt="Screen Shot 2021-08-11 at 1 57 24 PM" src="https://user-images.githubusercontent.com/85841915/129017978-965cab8d-0145-4db4-b469-522307579bc0.png">
I started by typing hi and the assistant named sheldon responded. then i wrote "waht are you doing" and sheldon didn't recognize the intent. Therefore it provided me with suggestion:
<img width="1280" alt="Screen Shot 2021-08-11 at 1 58 11 PM" src="https://user-images.githubusercontent.com/85841915/129017995-773fbb2c-ed9d-4096-b76f-7de1efba5ea9.png">
I clicked one of the options that sheldon provides. Then I typed "show me your services". here sheldon recognize the intent and respond with the available services to it. 
<img width="1280" alt="Screen Shot 2021-08-11 at 1 59 09 PM" src="https://user-images.githubusercontent.com/85841915/129018006-61e52aa7-8a53-4334-940b-d68032b4fcac.png">
I clicked rotation control. Then sheldon responded:
<img width="1280" alt="Screen Shot 2021-08-11 at 1 59 16 PM" src="https://user-images.githubusercontent.com/85841915/129018013-882fd0a3-f09f-423c-8fe9-1267529ec443.png">
When clicking <img width="51" alt="Screen Shot 2021-08-11 at 1 59 42 PM" src="https://user-images.githubusercontent.com/85841915/129018072-ae844184-0ecb-4d3a-9779-49236d9081c5.png"> icon
<img width="1280" alt="Screen Shot 2021-08-11 at 1 59 35 PM" src="https://user-images.githubusercontent.com/85841915/129018020-8d18768d-b003-4dbe-ae3a-ba49e5393bb6.png">

