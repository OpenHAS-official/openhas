const body = document.body;

// Theme Support
function updateThemeBySelect(preference) {
    const body = document.body;
    updatePreferenceMetadata(preference);
    switch (preference) {
        case 'dark':
            updatePreferenceMetadata(preference);
            body.classList.add('theme-dark');
            body.classList.remove('theme-dark-auto');
            body.dataset.preferencesTheme = 'dark';
            break;
        case 'light':
            updatePreferenceMetadata(preference);
            body.classList.remove('theme-dark');
            body.classList.remove('theme-dark-auto');
            body.dataset.preferencesTheme = 'light';
            break;
        default:
            updatePreferenceMetadata(preference, 'theme-dark-auto');
            updateByColorScheme();
            body.dataset.preferencesTheme = 'default';
            break;
    }
}

function updateByColorScheme() {
    if (window.matchMedia &&
        window.matchMedia('(prefers-color-scheme: dark)').matches) {
        body.classList.add('theme-dark');
    } else {
        body.classList.remove('theme-dark');
    }
}

function updatePreferenceMetadata(preference) {
    // send put API request to update theme preference in the metadata JSON string in the users table
}

// Event listeners
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
    updateByColorScheme();
});

// on DOM load
document.addEventListener("DOMContentLoaded", function () {
    switch (body.dataset.preferencesTheme) {
        case 'dark':
            body.classList.add('theme-dark');
            break;
        case 'light':
            body.classList.remove('theme-dark');
            break;
        default:
            updateByColorScheme();
            break;
    }
});
