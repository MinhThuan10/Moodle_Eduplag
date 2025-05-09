# Moodle Assign Plugin with EduPlag Integration

This plugin extends the core Moodle **assignment (mod_assign)** module to support plagiarism checking using the **EduPlag** system.

## Features

- Automatically submits student assignment files to EduPlag after submission.
- Retrieves and displays plagiarism scores and similarity report URLs.
- Adds plagiarism result columns to the grading table for instructors.
- Displays plagiarism report summary in student submission status.

## Installation

This is a customized version of Moodle’s core `assign` module, enhanced with built-in integration with the **EduPlag** plagiarism detection system. This integration allows assignment submissions to be automatically checked for plagiarism and shows the results directly within Moodle’s grading interface.

---

## 📦 Installation

### 1. Remove the existing `assign` module

Before installing the new version, you must delete the current `assign` module from your Moodle installation.

#### On Linux:

Open a terminal and run the following command:

```bash
cd /path/to/your/moodle/mod
rm -rf assign
```
This will permanently remove the existing assignment module.

### 2. Clone the customized plugin from GitHub
Run the following command to clone the EduPlag-integrated version of the assign module:

cd /path/to/your/moodle/mod
git clone https://github.com/MinhThuan10/Moodle_Eduplag.git assign
This will place the plugin code into the mod/assign folder.

### 3: Reload Moodle in your browser
Visit your Moodle site will detect the new plugin and redirect to the Plugins check page.

### 4 Upgrade the Moodle database
Click the "Upgrade Moodle database now" button and wait for the installation to complete.

Once successful, your site will have the updated assignment module with EduPlag plagiarism detection built-in.
