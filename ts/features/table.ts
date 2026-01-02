const tableContainer = document.querySelector('div.download-table') as HTMLElement | null;
const tbody = tableContainer?.querySelector('tbody:not(.latest-release)') as HTMLElement | null;
const toggleButton = tableContainer?.querySelector('button.table-toggle') as HTMLButtonElement | null;

export const tableModule = {
  maxVisibleRows: 3,

  getRows: (): HTMLElement[] => {
    if (!tbody) return [];

    return Array.from(tbody.querySelectorAll('tr'));
  },

  updateButtonState: (button: HTMLButtonElement, isExpanded: boolean): void => {
    const span = button.querySelector('span');
    const icon = button.querySelector('i');

    if (!span || !icon) return;

    button.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
    span.textContent = isExpanded ? 'Show less' : 'Show more';
    icon.className = `fa fa-chevron-${isExpanded ? 'up' : 'down'}`;
  },

  setRowsVisibility: (rows: HTMLElement[], isExpanded: boolean): void => {
    rows.forEach((row, index) => {
      if (index >= tableModule.maxVisibleRows) row.style.display = isExpanded ? '' : 'none';
    });

    if (tbody) tbody.classList.toggle('collapsed', !isExpanded);
  },

  toggle: (button: HTMLButtonElement, rows: HTMLElement[]): void => {
    const isExpanded = button.getAttribute('aria-expanded') === 'true';

    tableModule.setRowsVisibility(rows, !isExpanded);
    tableModule.updateButtonState(button, !isExpanded);
  },

  init: (): void => {
    if (!tableContainer || !tbody || !toggleButton) return;

    const rows = tableModule.getRows();
    if (rows.length <= tableModule.maxVisibleRows) {
      toggleButton.style.display = 'none';
      return;
    }

    tableModule.setRowsVisibility(rows, false);
    toggleButton.addEventListener('click', () => tableModule.toggle(toggleButton, rows));
  }
};
