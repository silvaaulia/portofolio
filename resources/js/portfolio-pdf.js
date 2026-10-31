const pageWidth = 400;
const pageHeight = 280;
const desktopWidth = 1440;

const exportStyles = `
    #pdfExportRoot {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        z-index: -1 !important;
        width: ${desktopWidth}px !important;
        min-width: ${desktopWidth}px !important;
        overflow: visible !important;
        visibility: hidden;
        background: #fffafd;
        color: #292722;
        font-family: inherit;
        pointer-events: none;
    }

    #pdfExportRoot,
    #pdfExportRoot *,
    #pdfExportRoot *::before,
    #pdfExportRoot *::after {
        animation: none !important;
        transition: none !important;
        scroll-behavior: auto !important;
    }

    #pdfExportRoot .container {
        width: min(1240px, calc(100% - 64px)) !important;
        max-width: none !important;
    }

    #pdfExportRoot img {
        width: auto !important;
        height: auto !important;
        max-width: 100% !important;
        max-height: 100% !important;
        object-fit: contain !important;
    }

    #pdfExportRoot .section {
        padding: 40px 0 !important;
        background-color: #fffafd;
    }

    #pdfExportRoot .section-label {
        margin-bottom: 28px !important;
    }

    #pdfExportRoot .reveal,
    #pdfExportRoot .reveal.active {
        opacity: 1 !important;
        transform: none !important;
        filter: none !important;
    }

    #pdfExportRoot .pdf-download-button,
    #pdfExportRoot .mobile-toggle,
    #pdfExportRoot .pmb-carousel-arrow,
    #pdfExportRoot .pmb-carousel-dots,
    #pdfExportRoot #scrollProgress,
    #pdfExportRoot #backToTop {
        display: none !important;
    }

    #pdfExportRoot #home {
        display: block !important;
        height: auto !important;
        min-height: 0 !important;
        overflow: visible !important;
        padding: 40px 30px 60px !important;
    }

    #pdfExportRoot #home .hero-content {
        display: flex !important;
        width: 100% !important;
        flex-direction: column !important;
        align-items: center !important;
        text-align: center !important;
        zoom: 1 !important;
    }

    #pdfExportRoot #home .hero-title {
        font-size: 76px !important;
        line-height: 1.2 !important;
        text-align: center !important;
    }

    #pdfExportRoot #home .hero-title .line-two {
        margin-top: 8px !important;
    }

    #pdfExportRoot #home .hero-photo {
        width: 240px !important;
        height: 260px !important;
        margin: 14px auto 0 !important;
    }

    #pdfExportRoot #home .hero-meta {
        gap: 8px !important;
        margin-top: 14px !important;
    }

    #pdfExportRoot #home .hero-actions {
        justify-content: center !important;
        margin-top: 14px !important;
    }

    #pdfExportRoot #works .container {
        display: grid !important;
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        align-items: start !important;
        gap: 18px !important;
    }

    #pdfExportRoot #works .section-label,
    #pdfExportRoot #works .works-header {
        grid-column: 1 / -1 !important;
    }

    #pdfExportRoot .project {
        display: flex !important;
        min-width: 0 !important;
        flex-direction: column !important;
        gap: 0 !important;
        margin: 0 !important;
        break-inside: avoid;
        transform: none !important;
    }

    #pdfExportRoot .project-image {
        display: flex !important;
        height: 165px !important;
        min-height: 0 !important;
        padding: 14px !important;
    }

    #pdfExportRoot .project-content {
        padding: 18px !important;
    }

    #pdfExportRoot .project-content h3 {
        font-size: 24px !important;
    }

    #pdfExportRoot .project-content > p {
        font-size: 11px !important;
        line-height: 1.55 !important;
    }

    #pdfExportRoot .project-details {
        gap: 8px !important;
        margin-top: 12px !important;
    }

    #pdfExportRoot .project-link {
        margin-top: 12px !important;
    }

    #pdfExportRoot .timeline {
        gap: 14px !important;
        margin-top: 8px !important;
    }

    #pdfExportRoot .tl-item {
        padding-left: 32px !important;
    }

    #pdfExportRoot .tl-item h3 {
        margin: 6px 0 4px !important;
        font-size: 18px !important;
    }

    #pdfExportRoot .tl-points {
        margin-top: 8px !important;
        padding-left: 14px !important;
    }

    #pdfExportRoot .tl-points li {
        margin-bottom: 5px !important;
        font-size: 10px !important;
        line-height: 1.5 !important;
    }

    #pdfExportRoot .process-heading {
        margin-bottom: 18px !important;
    }

    #pdfExportRoot .process-grid {
        grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
        gap: 10px !important;
        margin-top: 18px !important;
    }

    #pdfExportRoot .process-card {
        min-height: 0 !important;
        padding: 16px !important;
    }

    #pdfExportRoot .process-icon {
        margin: 12px 0 8px !important;
    }

    #pdfExportRoot .process-card h3 {
        font-size: 15px !important;
    }

    #pdfExportRoot .process-card p {
        font-size: 10px !important;
        line-height: 1.5 !important;
    }

    #pdfExportRoot #skills .skills-layout {
        display: block !important;
    }

    #pdfExportRoot #skills .skills-heading {
        display: grid !important;
        grid-template-columns: minmax(0, .8fr) minmax(0, 1.2fr) !important;
        align-items: end !important;
        column-gap: 32px !important;
        margin-bottom: 18px !important;
    }

    #pdfExportRoot #skills .skills-heading .eyebrow {
        grid-column: 1 / -1 !important;
    }

    #pdfExportRoot #skills .skills-heading h2 {
        margin-top: 8px !important;
        font-size: 38px !important;
    }

    #pdfExportRoot #skills .skills-heading > p:last-child {
        margin-top: 8px !important;
        font-size: 11px !important;
        line-height: 1.55 !important;
    }

    #pdfExportRoot #skills .skill-groups {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 9px !important;
        margin-top: 0 !important;
    }

    #pdfExportRoot #skills .skill-group {
        padding: 12px !important;
    }

    #pdfExportRoot #skills .skill-group-head {
        gap: 8px !important;
        margin-bottom: 8px !important;
    }

    #pdfExportRoot #skills .skill-group-head strong {
        font-size: 11px !important;
    }

    #pdfExportRoot #skills .skill-tags {
        gap: 5px !important;
    }

    #pdfExportRoot #skills .skill-tag {
        padding: 4px 7px !important;
        font-size: 9px !important;
    }

    #pdfExportRoot #certificates .container {
        display: grid !important;
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        align-items: start !important;
        gap: 14px !important;
    }

    #pdfExportRoot #certificates .section-label,
    #pdfExportRoot #certificates .works-header {
        grid-column: 1 / -1 !important;
    }

    #pdfExportRoot #certificates .works-header {
        margin-bottom: 0 !important;
    }

    #pdfExportRoot .certificate-card {
        grid-template-columns: minmax(0, 1fr) !important;
        align-content: start !important;
        gap: 10px !important;
        padding: 14px !important;
        break-inside: avoid;
    }

    #pdfExportRoot .certificate-preview img {
        height: 145px !important;
        object-fit: contain !important;
    }

    #pdfExportRoot .certificate-information .eyebrow {
        margin-bottom: 6px !important;
        font-size: 8px !important;
    }

    #pdfExportRoot .certificate-information h3 {
        margin-bottom: 8px !important;
        font-size: 22px !important;
    }

    #pdfExportRoot .certificate-information > p:not(.eyebrow) {
        margin-bottom: 10px !important;
        font-size: 10px !important;
        line-height: 1.5 !important;
    }

    #pdfExportRoot .certificate-details {
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 8px !important;
        margin-bottom: 10px !important;
    }

    #pdfExportRoot .certificate-details span {
        font-size: 8px !important;
    }

    #pdfExportRoot .certificate-details strong {
        font-size: 10px !important;
    }

    #pdfExportRoot .certificate-link {
        font-size: 10px !important;
    }

    #pdfExportRoot #contact {
        padding: 56px 24px !important;
    }

    #pdfExportRoot .pmb-carousel-slide:not(.is-active) {
        display: none !important;
    }
`;

const breakableSelectors = [
    '.project',
    '.education-card',
    '.tl-item',
    '.process-card',
    '.skill-group',
    '.certificate-card',
];

function getBreakPoints(stage, scale) {
    const pointsByRow = new Map();
    const stageTop = stage.getBoundingClientRect().top;

    for (const selector of breakableSelectors) {
        for (const element of stage.querySelectorAll(selector)) {
            const rect = element.getBoundingClientRect();
            const row = Math.round(rect.top);
            const bottom = Math.round(rect.bottom - stageTop);

            pointsByRow.set(row, Math.max(pointsByRow.get(row) ?? 0, bottom));
        }
    }

    return [...pointsByRow.values()]
        .map(point => point * scale)
        .sort((a, b) => a - b);
}

function createSlices(canvasHeight, maxSliceHeight, breakPoints) {
    if (canvasHeight <= maxSliceHeight) {
        return [{ start: 0, end: canvasHeight }];
    }

    const slices = [];
    let start = 0;

    while (start < canvasHeight) {
        const limit = Math.min(start + maxSliceHeight, canvasHeight);
        const safeBreak = limit < canvasHeight
            ? breakPoints.filter(point => point > start + 1 && point <= limit).at(-1)
            : canvasHeight;
        const end = safeBreak ?? limit;

        slices.push({ start, end });
        start = end;
    }

    return slices;
}

async function waitForImages(root) {
    const images = [...root.querySelectorAll('img')];

    for (const image of images) {
        image.loading = 'eager';
    }

    await Promise.all(images.map(image => {
        if (image.complete) {
            if (image.naturalWidth === 0) {
                throw new Error(`Image failed to load: ${image.currentSrc || image.src}`);
            }

            return Promise.resolve();
        }

        return new Promise((resolve, reject) => {
            const timeout = window.setTimeout(() => {
                reject(new Error(`Timed out loading image: ${image.currentSrc || image.src}`));
            }, 15000);

            image.addEventListener('load', () => {
                window.clearTimeout(timeout);
                resolve();
            }, { once: true });

            image.addEventListener('error', () => {
                window.clearTimeout(timeout);
                reject(new Error(`Image failed to load: ${image.currentSrc || image.src}`));
            }, { once: true });
        });
    }));
}

async function downloadPortfolio() {
    const [{ default: html2canvas }, { jsPDF }] = await Promise.all([
        import('html2canvas'),
        import('jspdf'),
    ]);
    const main = document.querySelector('main');
    const footer = document.querySelector('footer');

    if (!main || !footer) {
        throw new Error('Portfolio content or footer could not be found.');
    }

    const style = document.createElement('style');
    style.textContent = exportStyles;

    const exportRoot = document.createElement('div');
    exportRoot.id = 'pdfExportRoot';
    exportRoot.innerHTML = '';
    exportRoot.append(main.cloneNode(true), footer.cloneNode(true));
    document.head.append(style);
    document.body.append(exportRoot);

    try {
        await document.fonts.ready;
        await waitForImages(exportRoot);

        const stages = [...exportRoot.querySelector('main').children]
            .filter(element => element.tagName === 'SECTION');
        const exportFooter = exportRoot.querySelector('footer');

        if (exportFooter) {
            stages.push(exportFooter);
        }

        if (stages.length === 0) {
            throw new Error('No portfolio sections are available for export.');
        }

        const pdf = new jsPDF({
            orientation: 'landscape',
            unit: 'mm',
            format: [pageWidth, pageHeight],
            compress: true,
            putOnlyUsedFonts: true,
        });

        pdf.setProperties({
            title: 'Portofolio Silva Aulia Nursamsiah',
            subject: 'Portofolio profesional',
            author: 'Silva Aulia Nursamsiah',
        });

        const scale = 2;
        let isFirstPage = true;

        for (const stage of stages) {
            const breakPoints = getBreakPoints(stage, scale);
            const canvas = await html2canvas(stage, {
                backgroundColor: '#fffafd',
                logging: false,
                scale,
                useCORS: true,
                width: desktopWidth,
                windowWidth: desktopWidth,
                windowHeight: 1200,
                scrollX: 0,
                scrollY: 0,
                onclone: clonedDocument => {
                    const clonedRoot = clonedDocument.getElementById('pdfExportRoot');

                    if (clonedRoot) {
                        clonedRoot.style.visibility = 'visible';
                    }
                },
            });

            const maxSliceHeight = canvas.width * pageHeight / pageWidth;
            const slices = createSlices(canvas.height, maxSliceHeight, breakPoints);

            for (const slice of slices) {
                if (!isFirstPage) {
                    pdf.addPage([pageWidth, pageHeight], 'landscape');
                }

                const pageCanvas = document.createElement('canvas');
                pageCanvas.width = canvas.width;
                pageCanvas.height = Math.ceil(slice.end - slice.start);

                const context = pageCanvas.getContext('2d');

                if (!context) {
                    throw new Error('Unable to prepare a PDF page image.');
                }

                context.drawImage(
                    canvas,
                    0,
                    slice.start,
                    canvas.width,
                    pageCanvas.height,
                    0,
                    0,
                    canvas.width,
                    pageCanvas.height,
                );

                const image = pageCanvas.toDataURL('image/jpeg', 0.94);
                const imageHeight = pageCanvas.height / pageCanvas.width * pageWidth;

                pdf.addImage(image, 'JPEG', 0, 0, pageWidth, imageHeight, undefined, 'FAST');
                isFirstPage = false;
                pageCanvas.width = 0;
                pageCanvas.height = 0;
            }

            canvas.width = 0;
            canvas.height = 0;
        }

        await pdf.save('Portofolio_Silva_Aulia_Nursamsiah.pdf', { returnPromise: true });
    } finally {
        exportRoot.remove();
        style.remove();
    }
}

function bindDownloadButton() {
    const downloadButton = document.getElementById('downloadPortfolioPdf');

    if (!downloadButton) {
        throw new Error('Portfolio PDF download button was not found.');
    }

    downloadButton.addEventListener('click', async () => {
        const originalMarkup = downloadButton.innerHTML;

        downloadButton.disabled = true;
        downloadButton.setAttribute('aria-busy', 'true');
        downloadButton.textContent = 'Menyiapkan PDF...';

        try {
            await downloadPortfolio();
        } catch (error) {
            console.error('Portfolio PDF download failed:', error);
            window.alert('PDF gagal dibuat. Silakan coba lagi.');
        } finally {
            downloadButton.innerHTML = originalMarkup;
            downloadButton.disabled = false;
            downloadButton.removeAttribute('aria-busy');
        }
    });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', bindDownloadButton, { once: true });
} else {
    bindDownloadButton();
}
