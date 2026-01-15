// Toast Notification System
class ToastNotification {
    constructor() {
        this.container = null;
        this.init();
    }

    init() {
        // Create container if it doesn't exist
        if (!document.querySelector('.toast-container')) {
            this.container = document.createElement('div');
            this.container.className = 'toast-container';
            document.body.appendChild(this.container);
        } else {
            this.container = document.querySelector('.toast-container');
        }
    }

    show(options) {
        const {
            type = 'info',
            title = 'Notification',
            message = '',
            icon = '🔔',
            stats = null,
            duration = 4000,
            closable = true
        } = options;

        // Create toast element
        const toast = document.createElement('div');
        toast.className = `toast ${type}`;

        // Build stats HTML if provided
        let statsHTML = '';
        if (stats && Object.keys(stats).length > 0) {
            statsHTML = '<div class="toast-stats">';
            for (const [label, value] of Object.entries(stats)) {
                statsHTML += `
                    <div class="toast-stat">
                        <span class="toast-stat-label">${label}:</span>
                        <span class="toast-stat-value">${value}</span>
                    </div>
                `;
            }
            statsHTML += '</div>';
        }

        // Build toast HTML
        toast.innerHTML = `
            <div class="toast-header">
                <div class="toast-icon">${icon}</div>
                <div class="toast-title">${title}</div>
                ${closable ? '<button class="toast-close" onclick="this.closest(\'.toast\').remove()">×</button>' : ''}
            </div>
            <div class="toast-body">
                ${message}
                ${statsHTML}
            </div>
        `;

        // Add to container
        this.container.appendChild(toast);

        // Auto remove after duration
        if (duration > 0) {
            setTimeout(() => {
                this.remove(toast);
            }, duration);
        }

        return toast;
    }

    remove(toast) {
        if (toast && toast.parentElement) {
            toast.classList.add('removing');
            setTimeout(() => {
                if (toast.parentElement) {
                    toast.remove();
                }
            }, 300);
        }
    }

    success(title, message, stats = null, duration = 4000) {
        return this.show({
            type: 'success',
            title,
            message,
            icon: '🎉',
            stats,
            duration
        });
    }

    error(title, message, stats = null, duration = 4000) {
        return this.show({
            type: 'error',
            title,
            message,
            icon: '❌',
            stats,
            duration
        });
    }

    warning(title, message, stats = null, duration = 4000) {
        return this.show({
            type: 'warning',
            title,
            message,
            icon: '⚠️',
            stats,
            duration
        });
    }

    info(title, message, stats = null, duration = 4000) {
        return this.show({
            type: 'info',
            title,
            message,
            icon: '💡',
            stats,
            duration
        });
    }
}

// Create global instance
const toast = new ToastNotification();
